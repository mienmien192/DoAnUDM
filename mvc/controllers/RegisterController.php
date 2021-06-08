<?php 
class Register extends Connect
{
	private $fail = false;
	private $userModel;
	function __construct(){
		$this->call_models('UserModel');
		$this->userModel=new UserModel;
	}

	function default()
	{
		Header("Location:http://localhost:8080/codePHP/DOAN/register");
	}
	function validator()
	{
		if (isset($_SESSION["adminEmail"])) {
			Header("Locationhttp://localhost:8080/codePHP/DOAN/");
		} else if ($this->fail) {
			$this->getView("Register", [
				'display' => 'block',
			]);
		} else {
			$this->getView("Register");
		}
	}
	

}
?>
