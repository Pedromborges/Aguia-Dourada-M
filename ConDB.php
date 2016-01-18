<?php
	//function __autoload($class)
	//{
	//	require_once"{$class}.class.php";
	//}
	require_once "CRUD.php";
	abstract class ConDB
	{
		private static $conn;
		private function setCon()
		{
			return
			is_null(self::$conn) ? 
			self::$conn = new PDO("mysql:host=mysql05.hstbr.net;dbname=bdaguiadourada", "admaguiad", "hQ9TiTQplg") :
			self::$conn;
		}
		public function getCon()
		{
			return $this->setCon();
		}
	}
?>
