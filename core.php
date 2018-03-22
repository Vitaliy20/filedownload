<?php 
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DB", "downloads");
abstract class core 
{

	
	protected $db;
	public function __construct() {
		$this->db = mysql_connect(HOST, USER, PASSWORD);
		if(!$this->db) {
			exit("Connection error".mysql_error());
			}
			if(!mysql_select_db(DB,$this->db)) {
				exit("No such database".mysql_error());
			}
			mysql_query("SET NAMES 'UTF8'");
		}

}
?>