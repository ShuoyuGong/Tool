<?php



    //验证手机号
    //移动:139 138 137 136 135 134 131 150 151 152 159 182 183
    //联通:155 130 131 132 136 185 145 176 177
    //电信:133 153 180 189 166 199
    //手机号是11位数字
    $inputNum=$_GET["inputNum"];
    $pattern= '/^(1(([35789][0-9])|(47)))\d{8}$/';
    $bol = preg_match($pattern, $inputNum) ?'是手机号':'不是手机号';
    // echo $bol;
    if($bol == "是手机号"){
        $host = "https://api04.aliyun.venuscn.com";
        $path = "/mobile";
        $method = "GET";
        $appcode = "273b41333f5b4f5ab30b7d1b3080b1a7";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "mobile=$inputNum";
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
        echo(curl_exec($curl));
    }else{
        echo("不是手机号");
    }
    
?>