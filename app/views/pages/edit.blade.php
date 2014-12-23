@extends('admin.layouts.master')

@section('content')

<section class="vbox">
    <section class="scrollable padder">
  <div class="row">
    <section class="panel panel-default">
                    <header class="panel-heading font-bold">
                      <h3 class="m-b-none">{{$page->title}}
                       <a class="btn btn-primary pull-right" href="{{URL::to('/pages/' . $page->id . '/sections')}}">View sections</a>
                      </h3>
                    </header>
                    <div class="panel-body">
                      <form class="form-horizontal" method="post" action="{{URL::to('/pages/update/' . $page->id )}}">

                        <div class="form-group">
                          <label class="col-sm-2 control-label">Overlay Title</label>
                          <div class="col-sm-10">
                            <input type="text" name="overlay_title" class="form-control rounded" value="{{$page->overlay_title}}">
                          </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label">Overlay text</label>
                          <div class="col-sm-10">
                            <input name="overlay_text" type="text" class="form-control rounded" value="{{$page->overlay_text}}">
                          </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label">Page Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$page->title}}" name="title">
                          </div>
                        </div>


                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label">Body Title </label>
                          <div class="col-sm-10">
                            <input name="body_title" type="text" class="form-control rounded" value="{{$page->body_title}}">
                          </div>
                        </div>


                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label">Body Text </label>
                          <div class="col-sm-10">
                            <textarea name="contents" type="text" class="form-control wisiwyg-editor" rows="8" cols="7">
                                {{$page->contents}}
                            </textarea>
                          </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                          <label class="col-sm-2 control-label">URI Segment </label>
                          <div class="col-sm-10">
                            <input name="slug" type="text" class="form-control rounded" value="{{$page->slug}}">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-4 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>
  </div>
  </section>
</section>
@stop