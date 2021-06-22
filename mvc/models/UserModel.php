<?php 
class UserModel extends BaseModel
	{
		const TABLE="user";
		public function getAll($select=['*'],$orderBy=[]){
			$user=$this->all(self::TABLE,$select,$orderBy);
			return $user;
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
		public function findByEmail($email){
			return $this->findEmail(self::TABLE, $email);
		}
		public function destroy($id){
			$this->delete(self::TABLE,$id);

		}
		public function login($username, $password){
			return $this->loginUser(self::TABLE,$username,$password);

		}
		
	}
 ?>