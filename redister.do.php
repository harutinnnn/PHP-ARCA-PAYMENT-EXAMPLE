<?php
include('functions.php');

$order_id = $orderNumber = time() . mt_rand();

$PostFields = array();
$PostFields['userName'] = MERCHANTNUMBER;
$PostFields['password'] = MERCHANTPASSWD;
$PostFields['returnUrl'] = BACK_URL;

$PostFields['amount'] = '1000';//1000 -> 10AMD


$PostFields['orderNumber'] = $orderNumber;


$PostFields['language'] = 'hy';
$PostFields['description'] = 'Some description';

$PostFields = http_build_query($PostFields);

$Response = Send_CURL_Request(TEST_URL . ARCA_REGISTER_URL, $PostFields);      // Registration of the order and get MDORDER
$Response = json_decode($Response);

$Message = "";
$Message = "<form action='" . $Response->formUrl . "' accept-charset='UTF-8' id='sendPayment' method='GET'>";
$Message .= "<input type='hidden' name='mdOrder' value='" . $Response->orderId . "'>";
$Message .= "<input type='Submit' style='display: none;' value='Send Payment'>";
$Message .= "</form>";
$Message .= "<script>document.getElementById('sendPayment').submit();</script>";
echo $Message;