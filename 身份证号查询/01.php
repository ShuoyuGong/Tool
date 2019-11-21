<?php


    $iCardBtn = $_POST["iCardBtn"];

    $host = "https://jisuidcard.market.alicloudapi.com";
    $path = "/idcard/query";
    $method = "GET";
    $appcode = "273b41333f5b4f5ab30b7d1b3080b1a7";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "idcard=$iCardBtn";
    $bodys = "";
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    echo (curl_exec($curl));
?>