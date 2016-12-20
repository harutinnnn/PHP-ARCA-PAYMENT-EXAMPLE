<?php

function Send_CURL_Request($URL, $PostFields)
{
    $CurlOptions = array(
        CURLOPT_URL => $URL,
        CURLOPT_PORT => REAL_PORT,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSLVERSION => SSL_VERSION,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $PostFields,
    );
    $CH = curl_init();
    if ($CH === false) {
        echo 'Initialization error #' . curl_errno($CH) . ' ---- ' . curl_error($CH);
    } else {
        if (curl_setopt_array($CH, $CurlOptions)) {
            $Result = curl_exec($CH);
            if (curl_errno($CH) > 0) {
                $RetStr = false;
            } else {
                $RetStr = $Result;
            }
        }

        curl_close($CH);
    }

    return $RetStr;
}