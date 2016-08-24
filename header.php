<?php
//$command = mysql_connect("23.248.162.241","debug","hdp@5C01") or die("mysql connect error!");
//mysql_select_db("web",$command);

$command = new PDO("mysql:host=23.248.162.241;dbname=web","debug","hdp@5C01");
$command->exec("set names utf8");
?>
<!doctype html>
<html  lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全部旅游_全部旅游推荐_绿野旅游网</title>
<meta name="keywords" content="全部旅游，全部旅游推荐，全部旅游哪里好 ，全部旅游好去处">
<meta name="description" content="2016年全部旅游去哪玩，绿野旅游网为您提供2016年全部旅游攻略信息由真实的灵感旅行家提供，绿野旅游网旅游攻略，最佳的自助游，自由行攻略指南">
<link rel="stylesheet" type="text/css" href="http://css.lotour.net/lgnewcss/lt_top_v2.css">
<link rel="stylesheet" type="text/css" href="./css/new.css">
<link rel="stylesheet" href="http://css.lotour.net/fm.revealator.jquery.css">
<link rel="stylesheet" type="text/css" href="./css/main.css">
<link rel="stylesheet" type="text/css" href="http://css.lotour.net/writer-pt3.css" media="all" />
<script type="text/javascript" src="http://js.lotour.net/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://js.lotour.net/zijia/fm.revealator.jquery.js"></script>



</head>

<body>
<header style="background-color:#ababab;">
	<div class="header" style="height:100px;">
		<div class="hl" style="height:95px;">
			<h1> 
				<a class="logo" href="http://www.amskj.net/" title="绿野旅游"   target="_blank">
					<img src="./images/logo.png" />
				</a> 
			</h1>
			<nav>
				<ul style="height:100px;">
					<li>
						<a href="./index.php" title="今日精选" class="a">首页</a>
					</li>
					<li>
						<a href="./list.php?type=today" title="今日精选" class="a" target="_blank">今日精选</a>
					</li>
					<li>
						<a href="./list.php?type=guonei" title="国内" class="a"  target="_blank">国内</a>
					</li>
					<li>
						<a href="./list.php?type=jingwai" title="境外" class="a"  target="_blank">境外</a>
					</li>
					<li>
						<a href="./list.php?type=pubu" title="瀑布" class="a"  target="_blank">瀑布</a>
					</li>
					<li>
						<a href="./list.php?type=xiagu" title="峡谷" class="a"  target="_blank">峡谷</a>
					</li> 
					<li>
						<a href="./list.php?type=mingxiao" title="名校" class="a"  target="_blank">名校</a>
					</li> 
					<li>
						<a href="./list.php?type=caoyuan" title="草原" class="a"  target="_blank">草原</a>
					</li> 
					<li>
						<a href="./list.php?type=qinzi" title="亲子" class="a"  target="_blank">亲子</a>
					</li> 
					<li>
						<a href="./list.php?type=youlechang" title="游乐场" class="a"  target="_blank">游乐场</a>
					</li> 
		        </ul>
			</nav>
		</div>
	</div>
</header> 
