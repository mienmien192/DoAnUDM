<?php 
	/**
	 * 
	 */
	class RegisterController extends Connect
	{
		private $userModel;
		function __construct()
		{
			$this->call_models("UserModel");
			$this->userModel=new UserModel;

		}
		function index(){
			$this->call_views('layout/login/register',$data);
		}

			
	}
 ?>