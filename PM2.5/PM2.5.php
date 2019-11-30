<?php
	$city = $_POST["city"];
	header("Content-Type: text/html;charset=utf-8");
    $host = "https://ali-pm25.showapi.com";
    $path = "/pm25-detail";
    $method = "GET";
    $appcode = "1d10bee7fe1e47228c21a56505922a16";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "city=$city";
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
