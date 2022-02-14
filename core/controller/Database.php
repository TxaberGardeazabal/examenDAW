<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bee03a8d8c5d93";$this->pass="8ff0151c";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_4dee0bae81015ae";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="bee03a8d8c5d93";$this->pass="8ff0151c";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_4dee0bae81015ae";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
