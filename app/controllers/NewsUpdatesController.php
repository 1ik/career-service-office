<?php

class NewsUpdatesController extends \BaseController {

    public function __construct(
        \cso\updates\NewsUpdateRepository $updates,
        \cso\departments\DepartmentRepository $departments, \cso\courses\CourseRepository $courses)
    {
        $this->news_updates = $updates;
        $this->departments = $departments;
        $this->courses = $courses;

        $this->beforeFilter('adminOnly', array('except' => 'show'));
    }

	/**
	 * Display a listing of the resource.
	 * GET /newsupdates
	 *
	 * @return Response
	 */
	public function index()
	{
		$news_updates = $this->news_updates->all();
        return View::make('news_updates.index', compact('news_updates'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /newsupdates/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('news_updates.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /newsupdates
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = $this->news_updates->store();
        if($post) {
            Session::put('successes', ['the news update has been created']);
            return Redirect::route('news_updates.index');
        }

        Session::put('errors' , $this->news_updates->get_errors());
        return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /newsupdates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
        $content = $this->news_updates->findItemBySlug($slug); //cached

        if($content == NULL)
            App::abort(404);

        $relateds = $this->news_updates->getRelatedContents($content); //cached

        $departments = $this->departments->all(); //cached
        $courses = $this->courses->all(); //cached
        $news_updates = $this->news_updates->getTopFourNewsUpdates(); //cached
        $events = $this->news_updates->getTopFourNewsEvents(); //cached
        return View::make('news_updates.show', compact('content','relateds', 'courses', 'departments', 'news_updates', 'events'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /newsupdates/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$update = $this->news_updates->find($id);
        return View::make('news_updates.edit', compact('update'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /newsupdates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if($this->news_updates->update($id,null))
        {
            Session::put('successes', ['The content has been updated successfully']);
            return Redirect::back();
        }

        Session::put('errors', $this->news_updates->get_errors());
        return Redirect::back();
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /newsupdates/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}