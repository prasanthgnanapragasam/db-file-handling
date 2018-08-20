<?php
error_reporting(-1);

include("Container.php");

if((!isset($_REQUEST["c"]) && empty($_REQUEST["c"])) ||
	 (!isset($_REQUEST["m"]) && empty($_REQUEST["m"]))) {
	echo "Invalid Call"; 
	exit;
}

$Obj = Container::getInstance();

$app = $Obj->setup();

$app[ucfirst($_REQUEST["c"])]->$_REQUEST["m"]();



exit;