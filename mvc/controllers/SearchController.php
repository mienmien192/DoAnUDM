<?php
class SearchController extends Connect{
    private $productModel;
   

    function __construct(){
        $this->call_models("ProductModel");
        $this->productModel= new ProductModel;
        
    }

    function index()
    {
       
        if (isset($_POST["search1"])) {
            $data = $this->productModel->searchByName($_POST["name_search"]);
            
        }
        else{
            $data=[];
        }
        $this->call_views('layout/search',$data);
    }
}