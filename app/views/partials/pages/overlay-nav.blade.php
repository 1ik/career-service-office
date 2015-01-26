    <div class="left-navigation">
      @if(!Sentry::check())
        <a id="signup-link">Sign up</a> | <a id="login-link" href="/sign-in">Log in</a>
      @else
        <?php $user = Sentry::getUser(); ?>
        <a href="{{URL::route('users.home')}}">{{$user->first_name }} {{$user->last_name}}</a> | <a href="/sign-out"><i class="fa fa-power-off"></i></a>
      @endif

      <div class="signup-extension hidden animated fadeInDown">
        <div class="arrow-up"></div>
          <div class="items">
            <div class="item" data-text="Enlighten yourself with jobs" data-toggle="modal" data-target="#myModal">
              <img src="assets/images/student.png" alt="" width="25px" height="25px">
              <p>students</p>
            </div>
            <div class="item" data-text="Stay Up to Date" data-toggle="modal" data-target="#alumniModal">
              <img src="assets/images/alumni.png" alt="" width="35px" height="25px">
              <p>alumnies</p>
            </div>
            <div class="item" data-text="Find Great candidates" data-toggle="modal" data-target="#employerModal">
              <img src="assets/images/employer.png" alt="" width="25px" height="25px">
              <p>employers</p>
            </div>
          </div>
        <div class="foot">
          <p>Choose the right role for you</p>
        </div>
      </div>
    </div>
    
    <div class="right-navigation">
      <div class="social-icons">
        <span class="icon fb-icon"></span>
        <span class="icon twitter-icon"></span>
        <span class="icon google-plus-icon"></span>
      </div>
    </div>
