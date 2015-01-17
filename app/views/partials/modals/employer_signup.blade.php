
<div class="modal fade" id="employerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Register as an Employer</h4>
      </div>
      <div class="modal-body">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="">Your Name : </label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="First Name" id="employer_first_name">
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Last Name" id="employer_last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="employer_gender">Gender </label>
                                    <select style="width:260px" name="student_gender" id="employer_gender" class="form-control">
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option selected value="o">Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="organisation_id">Select Organisation: </label>
                                    <select name="employer_organisation_id" class="form-control" id="employer_organisation_id">
                                        @foreach($organisations as $org)
                                            <option value="{{$org->id}}">{{$org->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="gender">Email adress : </label>
                                    <input type="email" class="form-control" name="email" id="employer_email" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="cell_phone">Cell Phone : </label>
                                    <input type="number" class="form-control" name="cell_phone" id="employer_cell_phone" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone number : </label>
                                    <input type="number" class="form-control" name="employer_phone_number" id="employer_phone_number" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="password">Password : </label>
                                    <input type="password" class="form-control" name="employer_password" id="employer_password" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <button class="btn btn-success btn-circl" id="employer-form-submit">Submit</button>
                                    <img src="assets/images/ajax-loader.gif" class="employer-loader hidden"/>
                                    <p class="pull-right empl-message animated hidden">Thanks for signing up please check your email for further instruction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</div>

