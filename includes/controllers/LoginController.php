<?php


class LoginController extends Controller
{
	protected $viewFileName = "login"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{

		$this->view->title = 'Login';

		if($this->user->isLoggedIn)
		{
			$this->user->redirectToIndex();
		}

		$this->checkForLoginPost();
		$this->checkForRegisterPost();
	}

	private function checkForLoginPost()
	{
		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'login')
		{
			//probably a login attempt!

			$username = $_POST['email'];
			$password = $_POST['password'];

			if($username != "" && $password != "")
			{
				if($this->user->login($username, $password))
				{
					$this->user->redirectToIndex();
				}
				else
				{
					$this->view->errorPasswd = true;
				}
			}

		}
	}

	private function checkForRegisterPost()
	{
		if(!empty($_POST) && isset($_POST['action']) && $_POST['action'] == 'register')
		{
			$requiredFields = array('email', 'password', 'confirm-password');

			$error = false;
			$errorFields = array();

			foreach($requiredFields as $fieldName)
			{
				if(!isset($_POST[$fieldName]) || $_POST[$fieldName] == '')
				{
					$error = true;
					$errorFields[$fieldName] = "Bitte Wert eingeben!";
				}
			}

			if(!$error)
			{
				$password = $_POST['password'];
				$username = $_POST['email'];

				if(strlen($password) < 8) //check if password is long enough
				{
					$error = true;
					$errorFields['pwd'] = "Passwort ist zu kurz! Bitte mindestens 8 Zeichen eingeben";
				}
				else if($password != $_POST['confirm-password']) //check if password matches password repetition
				{
					$error = true;
					$errorFields['pwd2'] = "Passwort Wiederholung entspricht nicht dem gleichen Wert von Passwort!";
				}

				if(!$error)
				{

					//check if username exists already...
					if(User::existsWithUsername($username) == false)
					{
						User::createUser(array('username' => $username, 'password' => $password));

						$jsonResponse = new JSON();
						$jsonResponse->result = true;
						$jsonResponse->setMessage("Benutzer wurde erfolgreich hinzugefügt!");
						$jsonResponse->send();
					}
					else
					{
						$errorFields['email1'] = "Benutzername ist schon vorhanden!";

						$jsonResponse = new JSON();
						$jsonResponse->result = false;
						$jsonResponse->setData(array('errorFields' => $errorFields));
						$jsonResponse->send();
					}

				}
			}

			$jsonResponse = new JSON();
			$jsonResponse->result = false;
			$jsonResponse->setData(array('errorFields' => $errorFields));
			$jsonResponse->send();
		}
	}
}