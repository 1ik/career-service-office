<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('/', function(){
	return View::make('site.index-new');
});


Route::get('test', function(){
	
	// Let's register a user.
    
    $user = Sentry::register(array(
        'email'    => 'sdfsdf@gmail.com',
        'password' => 'test',
    ));

    // Let's get the activation code
    $activationCode = $user->getActivationCode();
    
    var_dump($activationCode);
    var_dump($user->id);
});


Route::get('activate-user/{user_id}/{code}', 'AuthController@activate_user');
Route::get('confirm-email/{user_id}/{code}', 'AuthController@confirmEmail');
Route::get('not-my-email/{user_id}/{code}', 'AuthController@activate_user');

Route::get('reject-registration/{user_id}/{code}', 'AuthController@rejectRegistration');


Route::get('/admin', function()
{
	return View::make('admin.index');
});


Route::post('/student-register', 'AuthController@postStudentRegistration');



















Route::get('facebook-feeds',function() {

	header( 'Content-Type: application/json' );
	$page_id = '22505712881';
	$fb_url = 'https://www.facebook.com/feeds/page.php?id=';
	$json_url = $fb_url . '22505712881&format=json';
	
	$curl = curl_init();
	
	$header[0] = 'Accept: text/xml,application/xml,application/xhtml+xml,';
	$header[0] .= 'text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5';
	$header[] = 'Cache-Control: max-age=0';
	$header[] = 'Connection: keep-alive';
	$header[] = 'Keep-Alive: 300';
	$header[] = 'Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7';
	$header[] = 'Accept-Language: en-us,en;q=0.5';
	$header[] = 'Pragma: ';
	
	curl_setopt( $curl, CURLOPT_URL, $json_url );
	curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla' );
	curl_setopt( $curl, CURLOPT_HTTPHEADER, $header );
	curl_setopt( $curl, CURLOPT_REFERER, '' );
	curl_setopt( $curl, CURLOPT_ENCODING, 'gzip,deflate' );
	curl_setopt( $curl, CURLOPT_AUTOREFERER, true );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $curl, CURLOPT_TIMEOUT, 10 );

	$json = curl_exec($curl);
	curl_close($curl); 
	echo $json;
	    
});