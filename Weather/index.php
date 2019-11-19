<?php
    // 接收查询天数
    $weatherForecastDay = $_GET["weatherForecastDay"];
    // 接收查询地区名字
    $place = $_GET["place"];

/*判断用户想要查询天数，做出相应查询******************************************IF
************************15为未来15天预报
***********************7为最近一星期预报
***********************24为24小时预报
*/
    $host = "https://ali-weather.showapi.com";
    $method = "GET";
    $appcode = "273b41333f5b4f5ab30b7d1b3080b1a7";
    if($weatherForecastDay == 15){  
        $path = "/day15";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "area=$place";
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
    }else if($weatherForecastDay == 7){
        $path = "/area-to-weather";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "area=$place&need3HourForcast=0&needAlarm=1&needHourData=0&needIndex=0&needMoreDay=1";
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
    }else if($weatherForecastDay == 24){
        $path = "/hour24";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "area=$place";
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
    }
?>