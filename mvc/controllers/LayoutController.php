<?php 
	/**
	 * 
	 */
	class LayoutController extends Connect
	{
		private $productModel;
		private $CategoryModel;
		private $UserModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;

			$this->call_models('CategoryModel');
			$this->CategoryModel=new CategoryModel;

			$this->call_models('UserModel');
			$this->UserModel=new UserModel;
		}
		function index(){	
			$data['main']='home/listProduct';
			$data['product']=$this->productModel->getAll();
			$data['Category']=$this->CategoryModel->getAll();
			
			$this->call_views('layout/index',$data);
		}
		function detail($id){
			$data['product']=$this->productModel->findById($id);
			$this->call_views('layout/detail',$data);
		}
		function shopGrid(){
			$data['main']='home/listProduct';
			$data['product']=$this->productModel->getAll();
			$this->call_views('layout/shopgrid',$data);
		}
		function contactUs(){
			$this->call_views('layout/contactUs');
		}
		function profile($id, $data){
			if(isset($_POST['x'])){
				
				$user=[
					'email'=>$_POST['username'],
					'password'=>$_POST['password'],
					'level'=>$_POST['level']
				];
			$data['user']=$this->userModel->getAll();
			$this->call_views('layout/profile', $data);
		}

		}
		function beautiTips(){
			$this->call_views('layout/beautiTips');
		}
	}
 ?>