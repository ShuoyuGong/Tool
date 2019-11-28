<?php
require_once '../AipFace.php';

// 你的 APPID AK SK
const APP_ID = '17864647';
const API_KEY = '5PsTv61uPwibyCi0H8K6daH6';
const SECRET_KEY = 'OXGXCcygUclvgHZMmO4Yemls6LNtxKOE';

$client = new AipFace(APP_ID, API_KEY, SECRET_KEY);

// 接收文件名
$imgName = $_POST["imgName"];
// 接收识别方式
$wayToIdentify = $_POST["wayToIdentify"];
// 接收文件2名字
$imgName1 = $_POST["imgName1"];

// 判断识别方式，做出不同识别操作
if($wayToIdentify == "人脸检测"){
    $image = base64_encode(file_get_contents('../../demo/userImg/'.$imgName));
    $imageType = "BASE64";
    // 调用人脸检测
    // print_r(json_encode($client->detect($image, $imageType)));
    // echo $imgName;
    // 如果有可选参数
    $options = array();
    $options["face_field"] = "age,beauty,expression,gender,glasses,race,eye_status,emotion";
    $options["max_face_num"] = 1;
    $options["face_type"] = "LIVE";
    $options["liveness_control"] = "LOW";
    // // 带参数调用人脸检测
    print_r(json_encode($client->detect($image, $imageType, $options)));
}elseif($wayToIdentify == "人脸对比"){
    $result = $client->match(array(
        array(
            'image' => base64_encode(file_get_contents('../../demo/userImg/'.$imgName)),
            'image_type' => 'BASE64',
        ),
        array(
            'image' => base64_encode(file_get_contents('../../demo/userImg/'.$imgName1)),
            'image_type' => 'BASE64',
        ),
    ));
    print_r(json_encode($result));
}
// echo $wayToIdentify;