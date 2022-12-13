<?php

	require_once(File::build_path(['config','Conf.php']));

	class Model{

		public static $pdo = NULL;

		public static function Init() {
			try {  
				   self::$pdo = new PDO(
				   	'mysql:host ='.Conf::getHostname().';dbname='.Conf::getDatabase().';charset=utf8' ,
				   	Conf::getLogin(),
				   	Conf::getPassword(),
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));                                   
				return self::$pdo;
			} catch(PDOException $e) {
				echo $e->getMessage();
				die();
			}

		}
		
	}

	Model::Init();
?>