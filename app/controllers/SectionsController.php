<?php




class SectionsController extends \BaseController {

    public function __construct(\cso\pages\SectionsRepository $sections) {
        $this->sections = $sections;
    }

	/**
	 * Display a listing of the resource.
	 * GET /sections
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /sections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sections/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
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

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}