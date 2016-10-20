<?php
session_start();
include 'configs/constants.php';
include 'configs/config.php';
include 'libraries/common_functions.php';
include 'libraries/connect.php';
$db=  connect_db();
include 'controllers/BaseController.php';

$c = !empty($_GET['c']) ? $_GET['c'] : 'Offer';
$controller_path = APP_PATH . 'controllers/' . $c . 'Controller.php';
include_once($controller_path);
switch ($c){
	case "Users":
		$controller = new \controllers\UsersController();
		break;
}
$controller->invoke();
?>