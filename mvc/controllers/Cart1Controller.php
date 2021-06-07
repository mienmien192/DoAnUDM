	<?php 
	
	class Cart1Controller extends Connect
	{
		private $productModel;
		private $customerModel;
		function __construct()
		{
			$this->call_models('ProductModel');
			$this->productModel=new ProductModel;
			$this->call_models('CustomerModel');
			$this->customerModel=new CustomerModel;
		}
		function index(){
			// unset($_SESSION['cart']);die();
			if(isset($_SESSION['cart'])){
				$data['cart']=$_SESSION['cart'];
			}
			else{
				$data['cart']=[];
			}
			
			$this->call_views('layout/cart/cart1',$data);

		}
		function store($id){
			
			$product=$this->productModel->findById($id);
			if(empty($_SESSION['cart'])|| !array_key_exists($id , $_SESSION['cart'])){
				$product['count']=1;
				$_SESSION['cart'][$id]=$product;
			}
			else{
				$product['count']=$_SESSION['cart'][$id]['count']+1;
				$_SESSION['cart'][$id]=$product;
			}
			
			header("location:".URL."cart1/index");

		}
		function delete($id){
			unset($_SESSION['cart'][$id]);
			header("location:".URL.'cart1/index');
			
		}
		function update($id){
			$value=$_POST['value'];
			$_SESSION['cart'][$id]['count']=$value;
			echo "update thanh cong";
				header("location:".URL."cart1/index");
			
			
		}
		function checkout(){
			if(!isset($_SESSION['username'])){
				
				header("location:".URL.'login');
			}
			if(isset($_SESSION['cart']))
			{
				$data['cart']=$_SESSION['cart'];
				$data['customer']=$this->customerModel->findByEmail($_SESSION['username']);
			}
			else{
				$data['cart'];
			} 
			$this->call_views('layout/cart/checkout',$data);
		}
	}
	?>