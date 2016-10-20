<?php
session_start();
include 'configs/constants.php';
include 'configs/config.php';
include 'libraries/common_functions.php';
include 'libraries/connect.php';
$db=  connect_db();
$controller = !empty($_GET['p']) ? $_GET['p'] : 'Offer';

$controller_path = APP_PATH . 'controllers/' . $controller . '.php';

if (is_file($controller_path)) {
	include ($controller_path);
} else {
	include 'errors/404.php';
}
