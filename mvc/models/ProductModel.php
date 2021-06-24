<?php 
class ProductModel extends BaseModel
	{
		const TABLE="sanpham";
		public function getAll($select=['*'],$orderBy=[]){
			$product=$this->all(self::TABLE,$select,$orderBy);
			return $product;
		}
		public function findById($id){
		return $this->find(self::TABLE, $id);
		}
		public function store($data=[]){
			$this->create(self::TABLE,$data);
		}
		public function update($id,$data){
			$this->updateNew(self::TABLE,$id,$data);

		}
		public function destroy($id){
			$this->delete(self::TABLE,$id);

		}
		public function searchByName($name_search)
		{
			$qr = "select * from sanpham where tensp like '%$name_search%'";

			$query = $this->_query($qr);
			$data = [];
			while ($row = mysqli_fetch_assoc($query)) {
				array_push($data, $row);
			}
			return $data;
				
		}
		public function getcategory($category){
            $sql="SELECT * FROM sanpham WHERE category='${category}' ";
            $query=$this->_query($sql);
            $data=[];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($data, $row);
            }
            return $data;
            
        }

		
	}

 ?>