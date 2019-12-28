<?php
	 $certificate =$_POST['certificate'];

	 $username =$_POST['username'] ;

	 $Id_num =$_POST['Id_num'];
   
    $host = "http://putonghua.market.alicloudapi.com";
    $path = "/icredit_ai_market/putonghua_search/v1";
    $method = "GET";
    //阿里云APPCODE
    $appcode = "f820720dbdc9446c889a605053399179";
    $headers = array();
    array_push($headers, "Authorization:APPCODE " . $appcode);
    array_push($headers, "Content-Type:application/json; charset=utf-8");


    $querys = "NUMBER=".$certificate."&NAME=".$username."&PERSON_ID=".$Id_num;
    $url = $host . $path . "?" . $querys;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_FAILONERROR, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($curl, CURLOPT_HEADER, true);
    if (1 == strpos("$".$host, "https://"))
    {
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }
    echo (curl_exec($curl));

?>