<?php


use cso\utils\UserUtil;

class AuthController extends Controller {

    public function __construct(
            \cso\students\StudentRepository $students,
            \cso\employers\EmployerRepository $empls,
            \cso\alumni\AlumniRepository $almns,
            \cso\organisations\OrganisationRepository $orgs,
            \cso\departments\DepartmentRepository $depts,
            \cso\courses\CourseRepository $courses)
    {
        $this->students = $students;
        $this->employers = $empls;
        $this->alumni = $almns;
        $this->orgs = $orgs;
        $this->depts = $depts;
        $this->courses = $courses;
    }

    public function getLogin()
    {
        $organisations = $$this->orgs->all();
        $departments = $this->depts->all();
        $courses = $this->courses->all();
        return View::make('site.signin', compact('organisations', 'courses', 'departments'));
    }

    public function postLogin()
    {
        $error = '';

        try {

            $credentials = Input::except("_token");
            $user = Sentry::authenticate($credentials, false);
            return Redirect::route('users.profile', $user->id);

        } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            $error =  'Login field is required.';
        } catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            $error =  'Password field is required.';
        } catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            $error =  'Wrong password, try again.';
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            $error =  'User was not found.';
        } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            $error =  'User is not activated.';
        } catch (Cartalyst\Sentry\Throttling\ UserBannedException $e) {
            $error =  'You are banned. Please contact administrators.';
        }

        return Redirect::back()->withErrors($error);
    }

    // registers a new users from student,alumni or employer submission form.
    // then sends an email to confirm or cancel the registration.
	private function registerUser($applicant) {

        try {
            //registers the user in the system.
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

            //Generate links to confirm or cancel registration.
            $confirm_link = URL::to('/confirm-email/' . $user->id . '/' . $activationCode );
            $cancel_link = URL::to('/reject-registration/' . $user->id . '/' . $activationCode );

            //send email to user.
            Mail::queue('emails.registration', ['user' => $user, 'confirm_link' => $confirm_link, 'cancel_link' => $cancel_link], function ($message) use ($user) {
                $message->subject('Email Confirmation');
                $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
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

	public function postStudentRegistration()
    {
		$applicant = Input::all();
		$result = $this->registerUser($applicant);

        if($result['status'] == 'success') {
            $user = $result['user'];
            $applicant['user_id'] = $user->id;

            if($student = $this->students->store($applicant)) {
                $user = Sentry::findUserById($user->id);
                $studentGroup = Sentry::findGroupByName("student");
                $user->addGroup($studentGroup);
                return ['status' => 'success', 'user' => $user, 'employer'=> $student ];
            } else {
                return ['status' => 'fail', 'errors' => $this->employers->get_errors() ];
            }

        } else {
            return $result;
        }
	}

    public function postEmployerRegistration()
    {
        $applicant = Input::all();
        $result = $this->registerUser($applicant);

        if($result['status'] == 'success') {
            $user = $result['user'];
            $applicant['user_id'] = $user->id;

            if($employer = $this->employers->store($applicant)) {
                $employerGroup = Sentry::findGroupByName('employer');
                $user = Sentry::findUserById($user->id);
                $user->addGroup($employerGroup);
                return ['status' => 'success', 'user' => $user, 'employer'=> $employer ];
            } else {
                return ['status' => 'fail', 'errors' => $this->employers->get_errors() ];
            }
        } else {
            return $result;
        }
    }

    public function postAlumniRegistration()
    {
        $applicant = Input::all();
        $result = $this->registerUser($applicant);

        if($result['status'] == 'success') {
            $user = $result['user'];
            $applicant['user_id'] = $user->id;

            if($alumni = $this->alumni->store($applicant)) {
                $alumniGroup = Sentry::findGroupByName('alumni');
                $user = Sentry::findUserById($user->id);
                $user->addGroup($alumniGroup);
                return ['status' => 'success', 'user' => $user, 'alumni'=> $alumni ];
            } else {
                return ['status' => 'fail', 'errors' => $this->alumni->get_errors() ];
            }

        } else {
            return $result;
        }

    }

    // cancels a user's registration application.
    public function rejectRegistration($id, $code) {

        try
        {
            $user = Sentry::findUserByActivationCode($code);

            //user clicked on activation code but the email is already confirmed.
            //so show 404.
            if($user->email_confirmed == 1) {
                App::abort(404);
            }

            if($user->id == $id) {

                //right user has clicked on right clink in right email.
                // so first find each user's profile and delete those.
                if($user->inGroup(Sentry::findGroupByName('student'))) {
                    $student = Student::whereUserId($user->id);
                    $student->delete();
                } else if($user->inGroup(Sentry::findGroupByName('alumni'))) {
                    $alumni = Alumni::whereUserId($user->id);
                    $alumni->delete();
                } else if( $user->inGroup(Sentry::findGroupByName('employer'))) {
                    $employer = Employer::whereUserId($user->id);
                    $employer->delete();
                }

                //save the email because we need to notify user after the deletion was complete.
                $email = $user->email;
                $user->delete();

                //notify the user that cancellation was successful.
                Mail::queue('emails.registration_rejected',[] ,function ($message) use ($email) {
                    $message->subject('Registration Application Cancelled');
                    $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
                    $message->to($email); // Recipient address
                });

                return "Your registration has been rejected.";
            }

            App::abort(404); // user has clicked on wrong or expired link.
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            App::abort(404); //use was not found in the system.
        }
    }

	public function confirmEmail ($uid, $activition_code) {
	
		try
		{
		    $user = Sentry::findUserByActivationCode($activition_code);

            if($user->email_confirmed == 1) {
                //son of a bitch has clicked the link again.
                //fuck him right in the ass.
                App::abort(404);
            }


		    $user->email_confirmed = 1;
		    $user->update();
		    //send email that you'll be notified when you get access.
		    //thanks much for signup.
            Mail::queue('emails.email_confirm', ['user' => $user], function ($message) use ($user) {
                $message->subject('Email Confirmed');
                $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
                $message->to($user->email); // Recipient address
            });

            $role = '';
            $studentGroup = Sentry::findGroupByName('student');
            $employerGroup = Sentry::findGroupByName('employer');
            $alumniGroup = Sentry::findGroupByName('alumni');

            if($user->inGroup($studentGroup)) {
                $role = 'Student';
            } else if($user->inGroup($employerGroup)) {
                $role = 'Employer';
            } else if( $user->inGroup($alumniGroup)) {
                $role = 'Alumni';
            }

            $subject = $user->first_name . ' ' . $user->last_name . ' has applied for ' . $role . ' account';
            $profile_url = URL::route('users.profile', $user->id);
            $user_name = $user->first_name . ' ' . $user->last_name;

            Mail::queue('emails.notify_registration', ['profile_url' =>  $profile_url, 'user_name' => $user_name], function ($message) use ($subject) {
                $message->subject($subject);
                $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
                $message->to('careerservicesbracu@gmail.com'); // Recipient address
            });


            return "Wow Your email is confirmed Thanks! You'll be notified if we think you worth to be with us! <br/> cheers!";
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
            App::abort(404);
		}
	}

	public function activate_user($uId, $code)
    {
		try {

		    // Find the user using the user id
		    $user = Sentry::findUserById($uId);

		    // Attempt to activate the user
		    if ($user->attemptActivation($code)) {
                $sign_in_link = URL::to('sign-in');

                //send email to user.
                Mail::queue('emails.user_activated', ['user' => $user, 'sign_in_link' => $sign_in_link], function ($message) use ($user) {
                    $message->subject('Application accepted');
                    $message->from('careerservicesbracu@gmail.com', 'Career Services Office');
                    $message->to($user->email); // Recipient address
                });

                //redirect admin to user profile.
                return Redirect::back();

		    } else {
		        App::abort(404); //user clicked on expired link.
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            App::abort(404); //user was not found
		} catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e) {
		    echo 'User is already activated.';
            App::abort(404);
		}
	}

    public function userHome()
    {
        $user = Sentry::getUser();
        return Redirect::route('users.profile', $user->id);
    }


    public function logOut() {
        Sentry::logout();
        return Redirect::to('sign-in');
    }

    public function changePassword()
    {
        try {

            $user = Sentry::findUserByLogin(Input::get('email'));
            $password = UserServices::generateRandomString(10);
            $user->password = $password;
            $user->update();
            Event::fire('password_changed', ['user' => $user, 'password' => $password]);
            return ['status' => 'success'];

        } catch (\Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return ['status' => 'fail', 'message' => 'User was not found with this Email address'];
        }

        App::abort(404);
    }

}
