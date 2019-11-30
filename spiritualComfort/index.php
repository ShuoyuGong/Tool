<?php
$f='dutang.txt';   //文件名
$a=file($f);  //把文件的所有内容获取到数组里面
$n=count($a); //获得总行数
$rnd=rand(0,$n);    //产生随机行号
$rnd_line=$a[$rnd]; //获得随机行
$tit = date('m 月 d 日');
?>
<!DOCTYPE html>
<!-- saved from http://www.12580sky.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>毒鸡汤 - 壮士可要来一碗！</title>
	<meta name="description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。">
	<meta name="keywords" content="鸡汤,毒鸡汤,馊鸡汤">
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta name="author"  />
	<meta property="og:title" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:url" content="http://www.12580sky.com" />
	<meta property="og:image" content="icon.png" />
	<meta property="og:site_name" content="毒鸡汤 - 壮士可要来一碗！" />
	<meta property="og:description" content="我们精心熬制了有屎以来最毒1000多条经典毒鸡汤,句句“治愈”人心! 只为了帮你更好的看清人生认识自己，直面现实,直面惨淡的人生,不给你励志,不给你慰藉,像一根鞭猛的抽你一下,使你清醒,知道这个世界和你自己最真实的一面,是青少年手机里的必备宝典。"/>
	<link rel="icon" href="/favicon.ico" type="image/x-icon" id="page_favionc">
	<link href="./img/min.css" rel="stylesheet">
	<link rel="alternate icon" type="image/png" href="icon.png">
	<link rel="stylesheet" href="../dist/css/bootstrap.css">
    <link rel="stylesheet" href="../dist/css/animate.css">
</head>
<body>
<header class="animated bounceInDown fast"> <!--delay-5s -->
        <div class="collapse bg-transparent" id="navbarHeader">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于</font></font></h4>
                <p class="text-muted">API接口开发，实时状态查询</p>
                </div>
            </div>
            </div>
        </div>
        <div class="navbar navbar-dark badge-success shadow-sm">
            <div class="container d-flex justify-content-between">
            <a href="../index.html" class="navbar-brand d-flex align-items-center">
                <img src="../index_img/tools.png" class="img-fluid mr-2">
                <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Everything(TOOLS)</font></font></strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="切换导航">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
    </header>
<div class="top-wrap" style="position: absolute; top: 1vh;width: 100%;z-index: 999"> 
<div class="container">
	<div class="row" style="margin-top: 70px;">
	    <div class="col">
	      <img src="./img/logo.png">
	    </div>
	    <div class="col">
	    	<div class="float-right" style="padding-top: 0px;">
	    		<a class="btn btn-primary btn-filled btn-xs" href="http://zz.tedu.cn/?TARENA_hbqq-hns-BD-PC-PZ-zh-pp-1792079-000-180111000000_TARENA&bdpz-pc" >软件182</a>
	    	</div>
	    </div>
		</div>
</div>
</div>

<div class="main-wrapper" style="position: relative; top: -6vh;">
<div class="container main-sentence justify-content-center text-center">	
		<span id="sentence" style="font-size: 2rem;"><?=$rnd_line;?></span>
</div>
</div>

<div class="foot-1" style="position: absolute; bottom: 7vh;width: 100%;">
	<div class="container">
		<div class="row">
			<div class="col text-center">
	            <span class="btn btn-success btn-filled btn-xs"><a class="btn btn-success btn-filled btn-xs" href="javascript:location.reload()" >再来一碗</a></span>
				<br>
				<br>
				<span class="btn btn-success btn-filled btn-xs"><a class="btn btn-success btn-filled btn-xs" href="../" >返回首页</a></span>
	    </div>
  		</div>
  		</div>
 <footer>
 <p class="text-center">© 2019 软件182 All rights reserved</p>
</footer>
</div>
</body>
</html>