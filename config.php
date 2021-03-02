<?php 
session_start();
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] ="en";
}
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
    if ($_GET['lang'] == 'en'){
        $_SESSION['lang'] = "en";
    }else{
        $_SESSION['lang'] = "np";
    }
}
require_once "lang/".$_SESSION['lang'].".php";

?>
<?php 
    // $base_url="http://localhost:3000/";
    $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
    $api_url = "http://127.0.0.1:8000/api";
    define("ROOT_PATH", dirname(__FILE__));
    define("BASE_URL",$base_url)
?>