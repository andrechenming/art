<?php
	class MemberItem{
		public $dbId;
		public $dbAccount;
		public $dbPasswrd;
		public $dbName;
		public $dbSex;
		public $dbregister;
		public $dbemail;
		public $dbAddress;
	}
	class MemberDAO{
		private $conn;
		private $host="localhost";
		private $account="root";
		private $password="";
		private $database="tang";
		function __construct(){
			$this->conn=new mysqli ($this->host,$this->account,$this->password,$this->database);
			$this->conn->set_charset("utf8");
		}
		function getById($id){
			$sql="select* from tang where db_id=".$id;
			$result=$this->conn->query($sql);
			
			if($result->num_rows>0){
				$row=$result->fetch_assoc();
				$item=new MemberItem();
				$item->dbId=$row["db_id"];
				$item->dbAccount=$row["db_account"];
				$item->dbPasswrd=$row["db_password"];
				$item->dbName=$row["db_name"];
				$item->dbSex=$row["db_sex"];
				$item->dbregister=$row["db_register"];
				$item->dbemail=$row["db_email"];
				$item->dbAddress=$row["db_address"];
				
			}
			return $item;
		}
		function getByWhere($where){
			$sql="select* from tang where ".$where;
			$result=$this->conn->query($sql);
			$arrayList=array();
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$item=new MemberItem();
					$item->dbId=$row["db_id"];
					$item->dbAccount=$row["db_account"];
					$item->dbPasswrd=$row["db_password"];
					$item->dbName=$row["db_name"];
					$item->dbSex=$row["db_sex"];
					$item->dbregister=$row["db_register"];
					$item->dbemail=$row["db_email"];
					$item->dbAddress=$row["db_address"];
					array_push($arrayList,$item);
				}
			}
			return $arrayList;
		}
	}
?>