<?php

class AuthController extends Controller {



	private function registerUser($applicant) {

		try {

    		$user = Sentry::register([
        		'email'    => $applicant['email'],
        		'password' => $applicant['password']
    		]);

    		$user->first_name = $applicant['first_name'];
    		$user->last_name = $applicant['last_name'];
    		$user->phone_number = $applicant['phone_number'];
    		$user->cell_phone = $applicant['cell_phone'];
    		$user->gender = $applicant['gender'];
    		$user->update();
    		
    		//Let's get the activation code
    		$activationCode = $user->getActivationCode();
    		//Send activation code to the user so he can activate the account
    		Mail::send('emails.registration', ['user' => $user, 'activationCode' => $activationCode ], function ($message) use ($user) {
		        $message->subject('Email Confirmation');
		        $message->from('echoanik@gmail.com', 'Career Services Office');
		        $message->to($user->email); // Recipient address
		    });
    		return ['status' => 'success', 'user' => $user];


		} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
    		return ['status' => 'fail', 'message' => 'Login field is required.'];
    	} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
    		return ['status' => 'fail', 'message' => 'Password field is required.'];
    	} catch (Cartalyst\Sentry\Users\UserExistsException $e) {
    		return ['status' => 'fail', 'message' => 'An user with this Email already exists'];
    	}
	}



	public function rejectRegistration($id, $code) {
		try
		{
		    $user = Sentry::findUserByActivationCode($code);
		    if($user->id == $id) {
		    	$user->delete();
		    	echo "deleted";
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
	}








	public function postStudentRegistration() {
		$applicant = Input::all();
		return $this->registerUser($applicant);
	}






	public function confirmEmail ($uid, $activition_code) {
	
		try
		{
		    $user = Sentry::findUserByActivationCode($activition_code);
		    $user->email_confirmed = 1;
		    $user->update();

		    //send email that you'll be notified when you get access.
		    //thanks much for signup.
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'Give user a message a user was not found with the credential provided';
		}
	}






	public function activate_user($uId, $code) {
		try
		{
		    // Find the user using the user id
		    $user = Sentry::findUserById($uId);

		    // Attempt to activate the user
		    if ($user->attemptActivation($code))
		    {
		        echo 'passed';
		    }
		    else
		    {
		        echo 'failed';
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
		    echo 'User is already activated.';
		}
	}
}
