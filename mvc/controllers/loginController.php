<?php 
/**
  * 
  */
class loginController extends Connect
{
	private $userModel;
	function __construct()
	{
		$this->call_models('UserModel');
		$this->userModel=new UserModel;
	}
	function index(){
		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$data['user']=$this->userModel->login($username,$password);

			if (empty($data['user'])) {
				$_SESSION['thongbao']="Vui lòng nhập đúng username và password";
			}
			else {
				Header("Location:".URL);
				$_SESSION['username']=$_POST['username'];
			}
		}
		if(!isset($_SESSION['username'])){
			$data=[];
		$this->call_views('layout/login/login',$data);
		}
		else{
			Header("Location:".URL);
		}
		
	}
	function logout(){
		unset($_SESSION['username']);
		Header("Location:".URL);
	}
} 
?>