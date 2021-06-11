<?php
class SeenProduct extends Connect
{
    private $productModel;
    private $item;
    function __construct(){
        $this->productModel =$this->getModel("ProductModel");

    }
    function index(){
        $this->getView("ProductController",
        [
            "product" => $this->productModel->getProduct(),
            "cookies" => $this->item,
        ]);
    }
    function cookies(){

    }

    function productDetails($id){
        $data = $this->productModel->getProductByID($id);
        $this->item = array(
            'tensp'=>$data['tensp'],
            'gia'=>$data['gia',
            'xuatxu'=>$data['xuatxu'],
            'soluong'=>$data['soluong'],
            
        );
        $this->index();
    }
}
?>