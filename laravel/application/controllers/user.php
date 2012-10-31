<?php

class User_Controller extends Base_Controller {

	public $restful = true;
	
	public function get_index()
	{
		// IM HERE
	}

	public function get_email_available()
	{	
		$email = Input::get('email');
		if($email == ''){
			return json_encode(
				array(
					'msg' => 'Une adresse e-mail est requise !',
					'valid' => false ));
		}
		if( ! $this->validateEmail($email) ){
			return json_encode(
				array(
					'msg' => 'Ça ne semble pas être un email valide.',
					'valid' => false ));
		}
		if( User::where_email( $email )->first() ){
			return json_encode(
				array(
					'msg' => 'Cette adresse e-mail est déjà utilisée. ',
					'valid' => false ));
		}
		

		return json_encode( array( 'valid' => true ) );
	}

	public function post_login(){

		$credentials = array(
			'username' => Input::get('inputEmail'),
			'password' => Input::get('inputPassword'));
		
		if( Auth::attempt($credentials) ){
			return Redirect::to('user');
		}else{
			return Redirect::to('user');			
		}
	}
	
	public function get_logout()
	{
		Auth::logout();
		return Redirect::to('user');
	}

	public function post_create(){
		
		$user = new User;
		$user->url_confirmation = sha1(time());
		$user->username = Input::get('inputUsername');
		$user->email = Input::get('inputEmail');
		$user->password = Input::get('inputPassword');

		// User already exist ?
		$user_exist = User::where_email($user->email)->first();
		if ( $user_exist ) {
			return View::make('user.index',array('msg' => 'This email is already used'));
		}

		// User email is valid ?
		if( ! $this->validateEmail($user->email) ){
			return View::make('user.index',array('msg' => 'Invalid email address'));
		}

		// Send an email of confirmation to the user
		$link = URL::to_route('confirm_user', array($user->url_confirmation));

		$mailer = IoC::resolve('mailer');
		$message = Swift_Message::newInstance('Guestgame, registration')
			->setFrom(array('info@guestgame.com'=>'Guestgame'))
			->setTo( $user->email )
			->addPart('Thanks you for your registration','text/plain')
			->setBody('<h1>Thanks you for your registration</h1><br><a href="'. $link .'">Follow this link to finish your registration !</a>','text/html');

		// Send the email
		$mailer->send($message);

		// Save the user	
		$user->save();

		return View::make('home.index',array('msg' => '<strong>Congratulation !</strong><br> You\'re well registered. To finish follow the link we\'ve sended on your mail box ! See you soon on GuestGame dude !'));
	}

	public function get_confirm($shaid){

		$user = User::where_url_confirmation($shaid)->first();

		// User exist ?
		if (! $user) {
			return json_encode(array('error' => 'invalid link'));
		}

		if ( $user->confirmed ) {
			//return json_encode(array('error' => 'invalid link'));
		}		
		// Shaid match ?
		$userShaid = $user->url_confirmation;

		if ($userShaid != $shaid) {
			return json_encode(array('error' => 'invalid link'));
		}

		// Update the confirmed flag
		$user->confirmed = true;
		$user->save();

		// Auto login the user
		Auth::login($user->id);
		
		return View::make('user.confirmation');		
	}

	public function post_update()
	{
		$id_user = Input::get('id_user');
		$user = User::find($id_user);

		if ( ! $user ){
			return json_encode('user doesnt exists');
		}

		$user->email = 'new_email@gmail.com';
		$user->password = 'new_secret';

		$user->save();		
	}

	private function validateEmail($email){

		$isValid = true;
		$atIndex = strrpos($email, "@");
		if (is_bool($atIndex) && !$atIndex)
		{
			$isValid = false;
		}
		else
		{
			$domain = substr($email, $atIndex+1);
			$local = substr($email, 0, $atIndex);
			$localLen = strlen($local);
			$domainLen = strlen($domain);
			if ($localLen < 1 || $localLen > 64)
			{
         		// local part length exceeded
				$isValid = false;
			}
			else if ($domainLen < 1 || $domainLen > 255)
			{
         		// domain part length exceeded
				$isValid = false;
			}
			else if ($local[0] == '.' || $local[$localLen-1] == '.')
			{
         		// local part starts or ends with '.'
				$isValid = false;
			}
			else if (preg_match('/\\.\\./', $local))
			{
         		// local part has two consecutive dots
				$isValid = false;
			}
			else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
			{
         		// character not valid in domain part
				$isValid = false;
			}
			else if (preg_match('/\\.\\./', $domain))
			{
         		// domain part has two consecutive dots
				$isValid = false;
			}
			else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',str_replace("\\\\","",$local)))
			{
         		// character not valid in local part unless 
         		// local part is quoted
				if (!preg_match('/^"(\\\\"|[^"])+"$/',
					str_replace("\\\\","",$local)))
				{
					$isValid = false;
				}
			}
			if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
			{
         		// domain not found in DNS
				$isValid = false;
			}
		}
		return $isValid;
	}
}