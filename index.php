<?php
session_start();
if(1){
	error_reporting(E_ALL & ~E_NOTICE);
	ini_set("display_errors","on");
}else{
	error_reporting(0);
	ini_set("display_errors","off");
}
#AUTOLOAD
spl_autoload_register(function($class){
	$ruta = str_replace("\\", "/", $class).'.php';
	require_once $ruta;
});
#INIT
$db = \core\spdo::singleton();
?>