<?php
define("__PAYMENT_TEST__", 1);

if (__PAYMENT_TEST__) {

    define("MERCHANTNUMBER", "donate_test");
    define('MERCHANTPASSWD', 'donate123');

    define('TEST_URL', 'https://91.199.226.7/payment/rest/');
    define("REAL_PORT", "8445");
} else {

    define("MERCHANTNUMBER", "34536491_api");
    define('MERCHANTPASSWD', 'donate123');

    define('TEST_URL', 'https://ipay.arca.am/payment/rest/');
    define("REAL_PORT", "443");
}

define("SSL_VERSION", "1");

//simple payment url
define('ARCA_REGISTER_URL', 'register.do');
define('ARCA_STATUS_URL', 'getOrderStatus.do');

define('BACK_URL', 'success.php');