@extends('admin.layouts.master')

@section('content')


<section class="scrollable padder">
              <div class="m-b-md">
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <section class="panel panel-default">
                    <header class="panel-heading font-bold">Add an organisation</header>
                    <div class="panel-body">
                      {{Form::open(['url' => URL::route('organisations.store'), 'method' => 'post', 'files' => true])}}

                      <div class="col-xs-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control"/>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                            <input type="text" name="initial" placeholder="Initial" class="form-control"/>
                        </div>
                      </div>
                      <div class="col-xs-6">
                          <div class="form-group">
                              <input type="text" name="url" placeholder="URL" class="form-control"/>
                          </div>
                      </div>
                      <div class="col-xs-6">
                          <div class="form-group">
                              <select name="organisation_type_id" class="form-control" id="">
                                  @foreach($organisationTypes as $type)
                                      <option value="{{$type->id}}">{{$type->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="form-group">
                            <input type="file" name="image" class="form-control"/>
                        </div>
                      </div>


                        <div class="col-xs-12">
                            <div class="checkbox i-checks">
                              <label>
                                <input name="cool" type="checkbox"> <i></i> Cool Organisation?
                              </label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-default">Submit</button>
                            <a class="btn btn-default btn-sm pull-right btn-rounded" href="{{URL::route('organisations.index')}}">Organisations List</a>
                        </div>
                      {{Form::close();}}
                    </div>
                  </section>
                </div>

              </div>

</section>

@stop