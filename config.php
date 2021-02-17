<?php include('./plugins/symfony_http_client_5.2.1.0_require/index.php');?>
<?php 
    session_start();
    $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
    $api_url = "http://127.0.0.1:8000/api";
    define("ROOT_PATH", dirname(__FILE__));
    define("BASE_URL",$base_url)
?>