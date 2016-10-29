<?php

/**
 * Load model
 * @param string $model_name 
 * @return string
 */ 
function load_model($model_name) {
    include_once APP_PATH . 'models/BaseResult.php';
    include_once APP_PATH . 'models/BaseModel.php';
    include_once APP_PATH . 'models/' . $model_name .'.php';
}

function redirect_page($url) {
    header("Location: ".$url);
}
function load_lib($name)
{
    include_once APP_PATH . 'libraries/'.$name.'.php';
}

function load_header() {
    // load model

    include_once APP_PATH . 'views/layouts/header.php' ;
	
}
function load_footer() {
    // load model
    include_once APP_PATH . 'views/layouts/footer.php' ;
	
}
function load_admin_header(){
    include_once APP_PATH . 'administrator/view/header.php';
}
function load_admin_footer(){
    include_once APP_PATH . 'administrator/view/footer.php';
}
function load_admin_menu(){
    include_once APP_PATH . 'administrator/view/menu.php';
}