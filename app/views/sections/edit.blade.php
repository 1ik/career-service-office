@extends('admin.layouts.master')

@section('content')

<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <p class="m-b-none">Sections of Page <em>{{$page->title}}</em></p>
        </div>

        @foreach($page->sections as $section)
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-default">
                    <header class="panel-heading font-bold">{{$section->title}}</header>
                    <div class="panel-body">
                      {{Form::open(['url' => URL::route('sections.update', $section->id), 'method' => 'put'])}}
                        <input type="hidden" name="page_id" value="{{$page->id}}"/>
                        <div class="form-group">
                          <label>Section Title</label>
                          <input type="text" class="form-control" value="{{$section->title}}" name="title">
                        </div>

                        <div class="form-group">
                          <label>Section Contents</label>
                          <textarea name="contents" id="" cols="30" rows="10">
                            {{$section->contents}}
                          </textarea>
                        </div>
                        <div class="form-group">
                          <label>Section Summery</label>
                          <input type="text" class="form-control" value="{{$section->summery}}" name="summery">
                        </div>
                        <div class="form-group">
                          <label>URI</label>
                          pages/{{$page->slug}}/sections/<input type="text" class="form-control" value="{{$section->slug}}" name="slug">
                        </div>
                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                      {{Form::close()}}
                    </div>
                  </section>
            </div>
        </div>
        @endforeach
    </section>
</section>


@stop