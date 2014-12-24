<?php

class AuthController extends Controller {

    public function __construct(\cso\students\StudentRepository $students) {
        $this->students = $students;

    }



    public function postLogin() {
        $error = '';
        try
        {
            $credentials = Input::except("_token");
            $user = Sentry::authenticate($credentials, false);

            $admin = Sentry::findGroupByName('admin');
            if($user->inGroup($admin)) {
                return Redirect::route('admin.dashboard');
            }


            $student = Student::whereUserId($user->id)->get();
            $name = $user->first_name . " " . $user->last_name;
            $name = implode(explode(" ", $name), "-");
            if($student != null) {
                return Redirect::to('profile/students/' . $user->id . '/' . $name );
            }
            //var_dump($student);
            //die();
            App::abort(404);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $error =  'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            $error =  'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            $error =  'Wrong password, try again.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $error =  'User was not found.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            $error =  'User is not activated.';
        }

        return Redirect::back()->withErrors($error);
    }















	private function registerUser($applicant)
    {

        try {

            $user = Sentry::register([
                'email' => $applicant['email'],
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

            Mail::send('emails.registration', ['user' => $user, 'activationCode' => $activationCode], function ($message) use ($user) {
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
		$result = $this->registerUser($applicant);
        if($result['status'] == 'success') {
            $user = $result['user'];
            $applicant['user_id'] = $user->id;
            if($student = $this->students->store($applicant)) {
                return ['status' => 'success', 'user' => $user, 'student'=> $student ];
            } else {
                return ['status' => 'fail', 'errors' => $this->students->get_errors() ];
            }
        } else {
            return $result;
        }

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
