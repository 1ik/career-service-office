@extends('admin.layouts.master')

@section('header')
<link rel="stylesheet" href="{{URL::to('assets/js/datepicker/datepicker.css')}}" type="text/css"/>
@stop

@section('content')

<section class="hbox stretch">
    <section>
        <section class="vbox">
            <section class="scrollable padder">
                <section class="row m-b-md">
                    <div class="col-sm-12">
                        <section class="panel panel-default">
                            <header class="panel-heading font-bold">Add a Job
                                <a class="btn btn-xs btn-default pull-right" href="{{URL::route('jobs.show', $job->id)}}">View Job</a>
                            </header>
                            <div class="panel-body">
                                {{Form::open(['url' => URL::route('jobs.update', $job->id), 'method' => 'put', 'files' => true])}}
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <input type="text" name="title" placeholder="Title" class="form-control" value="{{$job->title}}"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div class="form-group">
                                            <input type="number" name="salary" placeholder="Salary" class="form-control" value="{{$job->salary}}"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                      <label for="salary">Responsibility</label>
                                      <div class="form-group">
                                          <textarea name="responsibility" id=""  rows="5" cols="80" class="form-control">{{trim($job->responsibility)}}</textarea>
                                      </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <label for="salary">Application Deadline</label>
                                        <div class="form-group">
                                            <?php $date = new DateTime($job->registration->ends_on); ?>
                                            <input type="text"  class="form-control datepicker" name="ends_on" value="{{$date->format('Y-m-d')}}"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <label for="salary">Category</label>
                                        <div class="form-group">
                                            <select name="category" class="form-control">
                                                <option value="ft" @if($job->category == 'ft') selected @endif >Full Time</option>
                                                <option value="pt" @if($job->category == 'pt') selected @endif>Part time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="">Which Organisation?</label>
                                            <select name="organisation_id" class="form-control" id="">
                                            @foreach($organisations as $org)
                                                <option value="{{$org->id}}" @if($job->organisation_id == $org->id) selected @endif >{{$org->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="">Attachment? ({{$job->attachment}})</label>
                                            <input type="file" name="image" class="form-control" placeholder="Attachment"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <label for="salary">URL</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="http://awesomeurl.com/awesome-job" class="form-control" name="url" value="{{$job->url}}"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <label for="salary">Vacancies</label>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="vacancy" value="{{$job->vacancy}}"/>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="checkbox i-checks">
                                        <label>
                                            <input name="hot" type="checkbox" @if($job->hot == 1) checked @endif> <i></i> I think this job is hot
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                    <a class="btn btn-xs btn-default" href="{{URL::route('jobs.show', $job->id)}}">View Job</a>

                                {{Form::close();}}
                            </div>
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
<script type="text/javascript" src="{{URL::to('assets/js/datepicker/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>
@stop