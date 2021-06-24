<?php 
	/**
	 * 
	 */
	class DetailController extends Connect
	{
		private $CategoryModel;
		private $ProductModel;
		function __construct()
		{
			$this->call_models("CategoryModel");
			$this->CategoryModel=new CategoryModel; 

			$this->call_models("ProductModel");
			$this->ProductModel=new ProductModel; 

			
		}
		function index($id){

            $data['detail_category']=$this->CategoryModel->Find_category($id);	
			$data_category=$data['detail_category']['tenCate'];
			$data['category']=$this->ProductModel->getcategory($data_category);
			// $data['Category']=$this->CategoryModel->getAll();

         
			

			$this->call_views('layout/category',$data);


		}
	}

 ?>