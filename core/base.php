
<?php 
function load_view ($view){
    $path = MODULESPATH.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR.$view.".php";
    if (file_exists($path)) require $path; 
        else echo "file not exist3";
    
};

function load_controller ($controller,$action="construct",$data=[]){
    $path = MODULESPATH.DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR.$controller.".php";
   
    if (file_exists($path)) {
        require $path; 
        if (function_exists($action."Action")) {
            call_user_func($action."Action");
        }
    } 
        else echo "file not exist1";
        
};

function get_header (){
    $path = LAYOUTPATH.DIRECTORY_SEPARATOR."header.php";
    if (file_exists($path)) {
        require $path; 
    } 
        else echo "file not exist2";
};
$page = isset($_GET['page'])?$_GET['page']:'Home';
$act = isset($_GET['action'])?$_GET['action']:'construct';
?>

