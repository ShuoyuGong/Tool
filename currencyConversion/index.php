<?php
    $sourceMoney = $_POST["sourceMoney"];
    $targetMoney = $_POST["targetMoney"];
    $originalText = $_POST["originalText"];


    $host = "https://ali-waihui.showapi.com";
    $path = "/waihui-transform";
    $method = "GET";
    $appcode = "273b41333f5b4f5ab30b7d1b3080b1a7";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    $querys = "fromCode=$sourceMoney&money=$originalText&toCode=$targetMoney";
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