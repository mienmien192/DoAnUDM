<?php 
	/**
	 * 
	 */
	class CartController extends Connect
	{
		private $productModel;
		
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;
		}
		function index(){
			// unset($_SESSION['cart']);die();
			if(isset($_SESSION['cart'])){
				$data['cart']=$_SESSION['cart'];
			}
			else{
				$data['cart']=[];
			}
			// $data['product']=$this->productModel->getAll();
			$this->call_views('layout/cart/cart',$data);

		}
		function store($id){
			
			$product=$this->productModel->findById($id);
			// echo "<pre>";
			// print_r($product);
			// echo "</pre>";
			if(empty($_SESSION['cart'])|| !array_key_exists($id , $_SESSION['cart'])){
				$product['count']=1;
				$_SESSION['cart'][$id]=$product;
			}
			else{
				$product['count']=$_SESSION['cart'][$id]['count']+1;
				$_SESSION['cart'][$id]=$product;
			}
			
			header("location:".URL);

		}
		function delete($id){
			unset($_SESSION['cart'][$id]);
			header("location:".URL.'cart/index');
			
		}
		function update($id){
			$value=$_POST['value'];
			$_SESSION['cart'][$id]['count']=$value;
			echo "update thanh cong";
			
			
		}
	}

?>