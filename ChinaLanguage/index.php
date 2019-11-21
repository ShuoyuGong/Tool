<?php
	 $certificate =$_POST['certificate'];
	// echo $certificate;
	//姓名，如：胡郦芸
	 $username =$_POST['username'] ;
	// //身份证号，如：440921199011169228
	 $Id_num =$_POST['Id_num'];
    //API产品路径
    $host = "http://putonghua.market.alicloudapi.com";
    $path = "/icredit_ai_market/putonghua_search/v1";
    $method = "GET";
    //阿里云APPCODE
    $appcode = "54b29adf2662452eb67b088c87dff451";
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