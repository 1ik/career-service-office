<h2>Welcome {{$user->first_name}} {{$user->last_name}} to Career Services Office</h2>
<p>A registration application has been submitted with this email address.</p>

<a href="{{URL::to('/confirm-email/' . $user->id . '/' . $activationCode )}}">Please click on this URL to Confirm your email.</a>

<p>OR</p>
<a href="{{URL::to('/reject-registration/' . $user->id . '/' . $activationCode )}}">Please click here to reject the registration.</a>

<p>Thanks</p>