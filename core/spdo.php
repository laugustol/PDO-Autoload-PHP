<?php
namespace core;
class SPDO extends \PDO{
	private static $instance = null;
	public function __construct(){
		parent::__construct(dbdriver.':host='.dbhost.';port='.dbport.';dbname='.dbname,dbuser,dbpass);
	}
	public static function singleton(){
		if(self::$instance == null){
			self::$instance = new self();
		}
		return self::$instance;
	}
}
?>