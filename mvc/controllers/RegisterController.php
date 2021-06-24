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
			if(isset($_POST['register'])){
				$user=[
					'ho'=>$_POST['ho'],
					'ten'=>$_POST['ten'],
					'email'=>$_POST['username'],
					'password'=>$_POST['password'],
					'phone'=>$_POST['phone'],
					'diachi'=>$_POST['diachi'],
					'level'=>1
				];
				$this->userModel->store($user);
				header("location:".URL.'login');
		}
		$data=[];
		$this->call_views('layout/login/register');
		}
	}

 ?>