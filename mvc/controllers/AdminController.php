<?php 
	/**
	 * 
	 */
	class AdminController extends Connect
	{
		
		function __construct()
		{
			
		}
		public function index(){
			if(!isset($_SESSION['username'])){
				Header("Location:".URL."login");
			}
			else{
				$data['main']='home/main';
				$this->call_views('admin/index',$data);
			}

		}
		function show()
		{
			echo __method__;
		}
	}
?>