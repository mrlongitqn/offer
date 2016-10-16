<?php

  include '../configs/config.php';
  include APP_PATH.'libraries/common_functions.php';
  include APP_PATH.'libraries/connect.php';
  $db=  connect_db();
 $controller = !empty($_GET['page']) ? $_GET['page'] : 'homepage';

$controller_path = APP_PATH . 'administrator/controllers/' . $controller . '.php';
if (is_file($controller_path)) {
	include ($controller_path);
} else {
	include 'errors/404.php';
}