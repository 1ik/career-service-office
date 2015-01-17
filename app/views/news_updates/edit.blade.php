@extends('admin.layouts.master')

@section('header')

<style type="text/css">

.scrollable {
    padding-bottom: 80px;
}

</style>

@stop

@section('content')
<section class="hbox stretch">
    <section>
        <section class="vbox">
            <section class="scrollable padder">
                <section class="row m-b-md">
                    <div class="col-sm-12">
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">New News update</header>
                            <div class="panel-body">
                                {{Form::open(['url' => URL::route('news_updates.update', $update->id), 'method' => 'put', 'files' => true])}}

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="title" placeholder="Title" class="form-control" value="{{$update->title}}"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="">URI for this news and event</label>
                                            <input type="text" name="slug" placeholder="URI for this content" class="form-control" value="{{$update->slug}}"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="image">Featured Image for this peice of content?? (Optional)</label>
                                            <input type="file" name="image" class="form-control" placeholder="Attachment" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="image">Body for this post??</label>
                                            <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$update->content}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="summery">Summery of the content (Optional)</label>
                                            <textarea name="summery" id="" cols="20" rows="5" class="form-control">{{$update->summery}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="summery">What kind of update is this?</label>
                                            <select name="category" class="form-control" id="">
                                                <option value="event" @if($update->category == 'event') selected @endif>Event</option>
                                                <option value="update"  @if($update->category == 'update') selected @endif>News update</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="attachment">Would like to attach something like pdf, docs etc? (Optional)</label>
                                            <input type="file" name="attachment" class="form-control" placeholder="Attachment"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <input value="{{$update->attachment_label}}" type="text" name="attachment_label" placeholder="Label for attached file (Optional, if you have attached anything)" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="">
                                                Keep this content published ? <input type="checkbox" @if($update->published == '1') checked @endif name="published" value="1" />
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                    </div>
                                {{Form::close();}}
                            </div>
                        </section>
                    </div>
                </section>
            </section>
        </section>
    </section>
</section>

@stop

@section('footer')

@stop