<?php

/**
 * Load model
 * @param string $model_name 
 * @return string
 */ 
function load_model($model_name) {
	include APP_PATH . 'models/' . $model_name .'.php'; 
}

function redirect_page($url) {
	header('Locaion');
}

function load_header() {
    // load model
    
    include APP_PATH . 'views/layouts/header.php' ; 
	
}
function load_footer() {
    // load model
    include APP_PATH . 'views/layouts/footer.php' ; 
	
}
function load_admin_header(){
    include APP_PATH . 'administrator/view/header.php';
}
function load_admin_footer(){
    include APP_PATH . 'administrator/view/footer.php';
}
function load_admin_menu(){
    include APP_PATH . 'administrator/view/menu.php';
}