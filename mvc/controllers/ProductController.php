 <?php 
 class ProductController extends Connect
 {
 	private $productModel;
 	function __construct()
 	{
 		$this->call_models('ProductModel');
 		$this->productModel=new ProductModel;
 	}
 	function index(){	
 		$data['main']='product/main';
 		$data['product']=$this->productModel->getAll();
 		$this->call_views('admin/index',$data);
 	}
 	function store(){
 		if(isset($_POST['addProduct'])){
 			$img=$_FILES['img']['name'];
 			if($img != null){
 				$tmp_name = $_FILES['img']['tmp_name'];
 				move_uploaded_file($tmp_name, './public/layout/img/product/'.$img);

 				$product=[
 					'tensp'=>$_POST['tensp'],
 					'img'=>$img,
 					'gia'=>$_POST['gia'],
 					'xuatxu'=>$_POST['xuatxu'],
 					'soluong'=>$_POST['soluong']
 				];
 				$this->productModel->store($product);
 				$data['product']=$this->productModel->getAll();
 				$data['main']='product/main';
 				$this->call_views('admin/index',$data);
 			}
 		}
 		$data['main']='product/add';
 		$this->call_views('admin/index',$data);
 	}
 	function edit($id){
 		if(isset($_POST['editProduct'])){
 			$img=$_FILES['img']['name'];
 			if($img != null){
 				$product = [
 					'img'=>$img
 				];
 				$this->productModel->update($id,$product);
 			}
 			$product=[
 				'tensp'=>$_POST['tensp'],
 				'gia'=>$_POST['gia'],
 				'xuatxu'=>$_POST['xuatxu'],
 				'soluong'=>$_POST['soluong']
 			];
 			$this->productModel->update($id,$product);
 			$data['product']=$this->productModel->getAll();
 			$data['main']='product/main';
 			$this->call_views('admin/index',$data);
 			
 		}
 		$data['product']=$this->productModel->findById($id);
 		$data['main']='product/edit';
 		$this->call_views('admin/index',$data);
 	}	
 	function delete($id){
 		$this->productModel->destroy($id);
 		$data['product']=$this->productModel->getAll();
 		$data['main']='product/main';
 		$this->call_views('admin/index',$data);

 	}
 	function show(){
 		echo __method__;
 	}
 }
 ?>
