<div class="row footer">


      <!-- subscribe -->
      <div class="row footer-head">
          <p>SUBSCRIBE US TO GET REGULAR UPDATES</p>
          <form class="form-inline" role="form">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
              </div>
              <a href="#modal-form" class="btn btn-success" data-toggle="modal">Subscribe!</a>
          </form>
      </div>
    <!-- subscribe -->

      <div class="row footer-body-wrapper">
          <div class="footer-body">

            <div class="col-md-5" >
              <h3>Recent News and updates</h3>
              <div class="post-links">
                <ul>
                    @foreach($news_updates as $update)
                      <li>
                        <p><i class="ti-angle-double-right"></i>
                            <a href="{{URL::route('news_update.show', $update->slug)}}">
                                {{$update->title}}
                            </a>
                        </p>
                      </li>
                    @endforeach
                </ul>
              </div>
            </div>


            <div class="col-md-4 ">
              <h3>Recent Events </h3>
              <div class="post-links">
                <ul>
                    @foreach($events as $update)
                      <li>
                        <p><i class="ti-angle-double-right"></i>
                            <a href="{{URL::route('news_update.show', $update->slug)}}">
                                {{$update->title}}
                            </a>
                        </p>
                      </li>
                    @endforeach
                </ul>
              </div>
            </div>

            <div class="col-md-3">
              <h3>Contact Information : </h3>

              <p>
                Office of Career Services & Alumni Relations (OCSAR), <br/>
                BRAC University, 49 Siddique Tower, (2nd Floor) <br/>
                Mohakhali, Dhaka- 1212; Bangladesh.
              </p>
              <!--
              <p style="font-size : 14px">
                  <i class="fa fa-mobile" style="font-size:14px"></i>
              </p>
              -->
              <p style="font-size : 14px">
                  <i class="fa fa-phone" style="font-size:14px"></i> + 04478444073
              </p>
              <p style="font-size : 14px">
                  <i class="fa fa-envelope-o" style="font-size:14px"></i> csoadmin@bracu.ac.bd;
                  <br/><i class="fa fa-envelope-o" style="font-size:14px"></i> csotraining@bracu.ac.bd
              </p>
            </div>
          </div>
      </div>
    </div>