@extends('admin.layouts.master')

@section('content')
<section class="vbox">
<section class="scrollable padder">


<div class="m-b-md">
    <h3 class="m-b-none">Bookmarked Jobs </h3>
</div>
  <div class="row">
    <div class="col-sm-12">
      <section class="panel panel-default">
        <header class="panel-heading">
          Jobs
        </header>
        <table class="table table-bordered m-b-none">
          <thead>
            <tr>
                <th>SL.</th>
                <th>Title</th>
                <th>Organisation</th>
                <th>Category</th>
                <th>Salary</th>
                <th>Vacancies</th>
                <th>Status</th>
                <th>Deadline</th>
                <th colspan="2">
                    Actions
                </th>
            </tr>
          </thead>

          <tbody>
            @foreach($user->saved_jobs as $saved_job)
            <?php $job = $saved_job->job; ?>
            <tr>
              <td>{{$job->id}}</td>
              <td> {{$job->title}} </td>
              <td>{{$job->organisation->initial}}</td>
              <td> {{ $job->category == 'pt' ? "Part time" : "Full time" }} </td>
              <td>{{$job->salary}}</td>
              <td>{{$job->vacancy}}</td>
              <td>{{$job->registration->open? "Open" : "Close"}}</td>
              <?php $end = new DateTime ($job->registration->ends_on); ?>
              <td>{{$end->format('m/d/Y')}}</td>
              <td>
                <a href="{{URL::route('jobs.show', $job->id)}}"><i class="fa fa-eye"></i></a>
              </td>
              <td>
                <a href="{{URL::route('users.saved_jobs.remove', [$saved_job->user_id, $job->id])}}"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
    </div>

</div>
</section>
</section>
@stop