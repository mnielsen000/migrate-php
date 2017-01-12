<?php

class Database {
	
	public function query($query) {

		$db_host = "206.128.152.47";
		$db_user = "root";
		$db_password = "";
		$db_name = "migratedemo"

		$con = mysql_connect($db_host, $db_user, $db_password) or die(mysql_error());

		mysql_query("CREATE DATABASE IF NOT EXISTS " . $db_name,NULL) or die(mysql_error());


                //$connect = mysql_select_db($db_name, $con) or die(mysql_error());

                //mysql_query("USE sampledb; CREATE TABLE IF NOT EXISTS users (first_name VARCHAR(20),  last_name VARCHAR(20));", $con) or die(mysql_error());


		//$connect = mysql_select_db($db_name, $con) or die(mysql_error());
		//$this->result = mysql_query($query, $j) or die(mysql_error());
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
