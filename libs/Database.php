<?php
class Database extends PDO{
      public function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS)
	{
		parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
	}
	public function select($sql,$data=array(),$fetchMode = PDO::FETCH_ASSOC){
		$sth = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$sth->bindValue("$key",$value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}
	public function insert($table,$data){
		ksort($data);

		$fNames = implode('`,`',array_keys($data));
		$fValues= ':'.implode(', :',array_keys($data));
		$sth = $this->prepare("INSERT INTO $table(`$fNames`) VALUES($fValues)");

		foreach ($data as $key => $value) {
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
	}
	public function update($table,$data,$where){
		ksort($data);

		$fDetails = null;
		foreach ($data as $key => $value) {
			$fDetails .= "`$key`=:$key,";
		}
		$fDetails = rtrim($fDetails,',');
		$sth = $this->prepare("UPDATE $table SET $fDetails WHERE $where");

		foreach ($data as $key => $value) {
			$sth->bindValue(":$key",$value);
		}
		$sth->execute();
	}
	public function delete($table,$where,$limit = 1){
		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
	}
}
?>