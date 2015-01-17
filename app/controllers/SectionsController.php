<?php


class SectionsController extends \BaseController {

    public function __construct(\cso\pages\SectionsRepository $sections,
                                \cso\departments\DepartmentRepository $depts,
                                \cso\courses\CourseRepository $courses,
                                \cso\updates\NewsUpdateRepository $newsUpdates) {

        $this->sections = $sections;
        $this->depts = $depts;
        $this->courses = $courses;
        $this->newsUpdates = $newsUpdates;
    }

	public function index($pageId)
	{
        $page = Page::with('sections')->find($pageId);

        if($page == NULL)
            App::abort(404);

        return View::make('sections.edit', compact('page'));
	}

	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($slug)
	{
        $section = $this->sections->findSectionBySlug($slug); //cached

        if($section == NULL) {
            App::abort(404);
        }

        $relateds = $this->sections->getRelatedSections($section); //cached
        $departments = $this->depts->all(); //cached
        $courses = $this->courses->all(); //cached
        $news_updates = $this->newsUpdates->getTopFourNewsUpdates(); //cached
        $events = $this->newsUpdates->getTopFourNewsEvents(); //cached
        return View::make('contents.single',
            compact('departments', 'courses', 'section', 'relateds', 'news_updates', 'events'));
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
        $page_id = Input::get('page_id');
        $section = $this->sections->update($id, Input::except('page_id','_token'));

        if($section) {
            return Redirect::to('/pages/' . $page_id . '/sections' );
        } else {
            var_dump($this->sections->get_errors());
        }
	}

	public function destroy($id)
	{
		//
	}

}