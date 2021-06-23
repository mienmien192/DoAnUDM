<?php 
	class Database{
		const HOST='localhost';
		const USERNAME='root';
		const PASSWORD='';
		const DB_NAME='quanlisanpham';
		private $connect;
		public function connect()
			{
			$this->connect=mysqli_connect(self::HOST,self::USERNAME,self::PASSWORD,self::DB_NAME);
			
			mysqli_set_charset($this->connect,"utf-8");
			if(mysqli_connect_errno()===0){
				return $this->connect;
			}
			return false;
		}
		
		public static function getBrandFromProduct(){
			$connect = self::connect();
			$sql = "SELECT DISTINCT(category) FROM sanpham WHERE product_status = 1 ORDER BY id DESC ";
			$stmt = $connect->prepare($sql);
			$stmt->execute();
			$records = array();
			// duyet toan bo phan tu trong ban sanpham
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$records[] = $row;
			}
			return $records;
		}
	}
 ?>