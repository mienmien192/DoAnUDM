<?php 
	/**
	 * 
	 */
	class CategoryModel extends BaseModel
	{
		const TABLE="category";
		public function getAll($select=['*'],$orderBy=[]){
			return $this->all(self::TABLE,$select,$orderBy);
		}
        public function Find_category($id){
            return $this->find(self::TABLE, $id);
        }
		
	}
 ?>