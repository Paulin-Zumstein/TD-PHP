<?php
require_once 'Conf.php';

class Model{

	public static $pdo;

	public static function Init(){
		$hostname= Conf::gethostname();
		$database_name =Conf::getDatabase();
		$login=Conf::getLogin();
		$password =Conf::getPassword();
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
	}
} 
Model::Init();
?>