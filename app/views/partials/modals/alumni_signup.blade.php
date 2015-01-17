
<div class="modal fade" id="alumniModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Register as an Alumni</h4>
      </div>
      <div class="modal-body">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <label for="">Your Name : </label>
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="First Name" id="alumni_first_name">
                            </div>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" data-trigger="change" data-required="true" placeholder="Last Name" id="alumni_last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="alumni_gender">Gender </label>
                                    <select style="width:260px" name="student_gender" id="alumni_gender" class="form-control">
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option selected value="o">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="gender">Email adress : </label>
                                    <input type="email" class="form-control" name="email" id="alumni_email" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="cell_phone">Cell Phone : </label>
                                    <input type="number" class="form-control" name="cell_phone" id="alumni_cell_phone" />
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone number : </label>
                                    <input type="number" class="form-control" name="alumni_phone_number" id="alumni_phone_number" />
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="phone_number">Organisation you are currently working : </label>
                                    <input type="text" class="form-control" name="alumni_organisation" id="alumni_organisation" />
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="phone_number">Designation : </label>
                                    <input type="text" class="form-control" name="alumni_designation" id="alumni_designation" />
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="alumni_employment_status">I am currently unemployed :
                                     <input type="checkbox" id="alumni_employment_status" name="alumni_employment_status"/>
                                    </label>
                                </div>
                            </div>


                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="password">Password : </label>
                                    <input type="password" class="form-control" name="alumni_password" id="alumni_password" />
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <button class="btn btn-success btn-circl" id="alumni-form-submit">Submit</button>
                                    <img src="assets/images/ajax-loader.gif" class="alumni-loader hidden"/>
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

