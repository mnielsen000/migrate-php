<?php

class Database {
	
	public function query($query) {

		$db_host = "[DB_HOST]";
		$db_user = "[DB_USER]";
		$db_password = "[DB_PASSWORD]";

		$con = mysql_connect($db_host, $db_user, $db_password) or die(mysql_error());
		$connect = mysql_select_db($db_name, $con) or die(mysql_error());
		$this->result = mysql_query($query, $j) or die(mysql_error());
		return $this->result;
	}

	public function fetch(){
		$rows = mysql_num_rows($this->result);
		$data = array();
		for($i=0;$i<$rows;$i++){
			$data[$i] = mysql_fetch_assoc($this->result);
		}
		return $data;
	}
}

?>
