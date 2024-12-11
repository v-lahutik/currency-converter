<?php
include("classes.php");

//export to JSON to the client
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// if $_GET is not set, then $code is set to 'BTC'

// if(!isset($_GET['code'])){
//    $code = 'BTC';
// } else{
//     $code = $_GET['code'];
// }


// same as above but shorter
$code = $_GET['code'] ?? 'BTC';


$converter = new CryptoConverter($code);
$rateInUSD = $converter->convert();
echo "{'rate': $rateInUSD}";
