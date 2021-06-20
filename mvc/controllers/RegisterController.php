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
			// model 
			if(isset($_POST['register'])){
				
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				if($password!=$cpassword){
					echo "password different repassword error!!";
				}
				else{
					$user=[
						'ho'=>$_POST['ho'],
						'ten'=>$_POST['ten'],
						'phone'=>$_POST['phone'],
						'passWord'=>$_POST['password'],
						'username'=>$_POST['username'],
						'level'=>1
					];
					
					
					$this->userModel->store($user);

					echo "Register Success ! ";
					header('location:'.URL.'login');
					
				}
				$this->call_views('layout/login/register');
				

			}
			else{
				echo "Error Register Again !!";
				$this->call_views('layout/login/register');
			}

			// views 
			

		}

	

			
	}
 ?>