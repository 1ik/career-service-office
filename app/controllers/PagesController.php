<?php

class PagesController extends \BaseController {


    public function __construct(
        \cso\courses\CourseRepository $courses,
        \cso\departments\DepartmentRepository $departments,
        \cso\organisations\OrganisationRepository $organisations,
        \cso\updates\NewsUpdateRepository $newsUpdates)
    {
        $this->courses = $courses;
        $this->departments = $departments;
        $this->organisations = $organisations;
        $this->newsUpdates = $newsUpdates;
    }

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($slug = '/')
	{
        // do we have cached data stored against this slug? if yes skip if not store the data.
        if( ! Cache::has($slug)) {
            Cache::forever($slug, Page::with('sections')->whereSlug($slug)->get()->first());
        }

        //retrieve the data.
        $data['page'] = Cache::get($slug);

        //no page exists with the slug so, show 404.
        if(!$data['page']) {
            App::abort(404);
        }

        // data needed for sign up forms. so those are cached too.
        if( ! Cache::has('sign_up_contents') ) {
            $pageContents['courses'] = $this->courses->all();
            $pageContents['departments'] = $this->departments->all();
            $pageContents['organisations'] = $this->organisations->all();
            $pageContents['events'] = $this->newsUpdates->getTopFourNewsEvents();
            $pageContents['news_updates'] = $this->newsUpdates->getTopFourNewsUpdates();

            //cache all the form data if it's not found in the cache.
            Cache::forever('pageContents', $pageContents);
        }

        //retrieve signup form data and merge it with the main array.
        $data = array_merge($data, Cache::get('pageContents'));


        if($slug == '/') {
            //we have some exclusive data for front page's header. and those are cached too.
            if( ! Cache::has('front_page_contents')) {
                $front['coolest_orgs'] = $this->organisations->getTheCoolestOrganisations();
                $front['recent_updates'] = NewsUpdate::orderBy('id', 'desc')->take(3)->get();
                Cache::forever('front', $front);
            }

            //retrieve those data and merge it with the main array.
            $data = array_merge($data, Cache::get('front'));
        }


        switch($data['page']->id) {
            case 1:
                $view = 'site.index-new';
                break;
            case 2:
                $view = 'internships.landing';
                break;
            case 3:
                $view = 'psdp_registrations.landing';
                break;
            case 4:
                $view = 'jobs.landing';
                break;
            case 5:
                $view = 'students.landing';
                break;
            case 6:
                $view = 'alumnies.landing';
                break;
            case 7:
                $view = 'organisations.landing';
                break;
        }

        return View::make($view, $data);
	}

	public function edit($id)
	{
        $page = Page::find($id);

        if($page == NULL)
            App::abort(404);

        return View::make('pages.edit',compact('page'));
	}

	public function update($id)
	{
        $page = Page::find($id);

        if($page == NULL)
            App::abort(404);

        $page->update(Input::all());
        $page->save();
        return Redirect::to('/pages/edit/'. $page->id );
	}

	public function destroy($id)
	{
		//
	}

}