<?php 
	/**
	 * 
	 */
	class UserController extends Connect
	{
		private $userModel;
		function __construct()
		{
			$this->call_models('userModel');
			$this->userModel=new UserModel;
		}
		function index(){
			$data['main']='user/main';
			$data['user']=$this->userModel->getAll();
			$this->call_views('admin/index',$data);
		}
		function store(){
			if(isset($_POST['x'])){
				
				$user=[
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'level'=>$_POST['level']
				];
				$this->userModel->store($user);
				$data['user']=$this->userModel->getAll();
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			$data['main']='user/add';
			$this->call_views('admin/index',$data);
		}
		function edit($id)
		{
			if(isset($_POST['editUser']))
			{
				$user=[
					'username'=>$_POST['username'],
					'password'=>$_POST['password'],
					'level'=>$_POST['level']
				];
				$this->userModel->update($id,$user);
				$data['user']=$this->userModel->getAll();
				$data['main']='user/main';
				$this->call_views('admin/index',$data);
			}
			$data['user']=$this->userModel->findById($id);
			$data['main']='user/edit';
			$this->call_views('admin/index',$data);
		}
		function delete($id){
		$this->userModel->destroy($id);
		$data['user']=$this->userModel->getAll();
		$data['main']='user/main';
		$this->call_views('admin/index',$data);

	}


		function show(){
			echo __method__;
		}
	}
?>