<?php
define("__PAYMENT_TEST__", 1);

if (__PAYMENT_TEST__) {

    define("MERCHANTNUMBER", "username");
    define('MERCHANTPASSWD', 'password');

    define('TEST_URL', 'https://91.199.226.7/payment/rest/');
    define("REAL_PORT", "8445");
} else {

    define("MERCHANTNUMBER", "username");
    define('MERCHANTPASSWD', 'password');

    define('TEST_URL', 'https://ipay.arca.am/payment/rest/');
    define("REAL_PORT", "443");
}

define("SSL_VERSION", "1");

//simple payment url
define('ARCA_REGISTER_URL', 'register.do');
define('ARCA_STATUS_URL', 'getOrderStatus.do');

define('BACK_URL', 'success.php');
