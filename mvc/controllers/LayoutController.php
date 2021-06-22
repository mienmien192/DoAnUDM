<?php 
	/**
	 * 
	 */
	class LayoutController extends Connect
	{
		private $productModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;
		}
		function index(){	
			$data['main']='home/listProduct';
			$data['product']=$this->productModel->getAll();
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
	}
 ?>