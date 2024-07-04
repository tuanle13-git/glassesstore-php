<?php
$path = dirname(__FILE__);
define('LAYOUTPATH',$path.DIRECTORY_SEPARATOR."layout");
define('MODULESPATH',$path.DIRECTORY_SEPARATOR."modules");
define('CONFIGPATH',$path.DIRECTORY_SEPARATOR."config");
define('COREPATH',$path.DIRECTORY_SEPARATOR."core");
require COREPATH.DIRECTORY_SEPARATOR."appload.php";

// Phân tích URL để lấy phần path sau domain
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = '/JEWELRYWEB-PHP/JEWELRYWEB-PHP/';

// Xử lý URL
