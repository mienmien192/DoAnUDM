<?php 

class BaseModel extends Database
{
	protected $connect;
	function __construct()
	{
		$this->connect=$this->connect();
	}
	public function all($table,$select=['*'],$orderBy=[]){
		$this->connect=$this->connect();
		$selectList=implode(',',$select);
		$orderByList=implode('', $orderBy);
		if($orderByList){
			$sql="SELECT ${selectList} from ${table} ORDER BY ${orderByList}";
		}
		else{
			$sql="SELECT ${selectList} from ${table}";
		}
		$sql="SELECT * FROM ${table}";
		$query=$this->_query($sql);
		$data=[];
		while($row=mysqli_fetch_assoc($query)){
			array_push($data,$row);
		}
		return $data;
	}
	public function _query($sql){
		return mysqli_query($this->connect,$sql);
	}
	public function loginUser($table, $username, $password){
		$sql="SELECT * FROM ${table} WHERE username='${username}' and password='${password}'";
		$query=$this->_query($sql);
		// echo ($sql);
		// die();

		return mysqli_fetch_assoc($query);
		}
	public function create($table, $data=[])
	{		

			$keyList=implode(',',array_keys($data));
			$valueList=array_map(function($v){
				return "'".$v."'";
			},array_values($data));
			$x=implode(',',$valueList);
			$sql="INSERT INTO ${table}(${keyList}) value(${x})";
		
			$query=$this->_query($sql);

	}
	public function find($table, $id){
		$sql="SELECT * FROM ${table} WHERE id=${id} ";
		$query=$this->_query($sql);
		return mysqli_fetch_assoc($query);
	}
	public function delete($table, $id)
	{
		$sql="DELETE FROM ${table} WHERE id=$id";
		$this->_query($sql);
		
	}
	public function updateNew($table, $id, $data){
		$list=[];
		foreach ($data as $key => $val) {
			array_push($list, "${key} = '".$val."'");
		}
		$dataList = implode(",", $list);
		$sql="UPDATE ${table} SET ${dataList} WHERE id=${id}";
		$query=$this->_query($sql);
	}
	public function findEmail($table, $email)
	{
		$sql="SELECT * FROM ${table} WHERE email='${email}' ";
		$query=$this->_query($sql);
		return mysqli_fetch_assoc($query);
		
	}
}
?>