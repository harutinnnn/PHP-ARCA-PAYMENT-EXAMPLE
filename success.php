<?php
$PostFields = array();
$PostFields['userName'] = MERCHANTNUMBER;
$PostFields['password'] = MERCHANTPASSWD;
$PostFields['language'] = 'ru';


$PostFields['orderId'] = $_GET['orderId'];
$orderId = $_GET['orderId'];

$PostFields = http_build_query($PostFields);
$orderStatus = $this->Send_CURL_Request(TEST_URL . ARCA_STATUS_URL, $PostFields);
$orderStatus = json_decode($orderStatus);


if (!empty($orderStatus) && isset($orderStatus->ErrorCode) && $orderStatus->ErrorCode == 0) {
    //everything is fine

} else {
    //you have an error

}
