<?php 
$sql1 = "select * from `tg_lvyou` where ctype='today' order by ctime desc limit 5";
$res1 = $command->prepare($sql1);
$res1->execute();

$sql2 = "select * from `tg_lvyou` where ctype='guonei' order by ctime desc limit 4";
$res2 = $command->prepare($sql2);
$res2->execute();

$sql3 = "select * from `tg_lvyou` where ctype='jingwai' order by ctime desc limit 4";
$res3 = $command->prepare($sql3);
$res3->execute();

$sql4 = "select * from `tg_lvyou` where ctype='today' order by ctime desc limit 4,4";
$res4 = $command->prepare($sql4);
$res4->execute();

$sql5 = "select * from `tg_lvyou` where ctype='caoyuan' order by ctime desc limit 6";
$res5 = $command->prepare($sql5);
$res5->execute();

$sql6 = "select * from `tg_lvyou` where ctype='youlechang' order by ctime desc limit 6";
$res6 = $command->prepare($sql6);
$res6->execute();
/*
$sql = "delete from `tg_lvyou` where id=6501";
$res = $command->prepare($sql);
$res->execute();
*/
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>hao123</title>
<link rel="stylesheet" href="http://css.lotour.net/utf8/base.css" media="screen" />
<link rel="stylesheet" href="http://css.lotour.net/2016/swiper.min.css" media="screen" />
<link rel="stylesheet" href="http://css.lotour.net/2016/index.css"/>
<link type="text/css" rel="stylesheet" href="http://css.lotour.net/zhuanti/hao123/hao123.css"/>
<script type="text/javascript" src="http://js.lotour.net/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="http://js.lotour.net/2016/common.js"></script>
<script src="http://js.lotour.net/login/top.only_v2016.js" type="text/javascript"></script>
<script src="http://s0.hao123img.com/res/js/autoheightLoader.js" type="text/javascript"></script>
</head>
<body monkey="lvyou-zixun">
    <div class="main clearfix">
        <div class="mian_l">
            <div class="banner">
                <a class="_pre" monkey="lunbotuchange" title="上一页"></a>
                <a class="_next" monkey="lunbotuchange" title="下一页"></a>
                <ul class="cul_list">
                    <?php while($row1=$res1->fetch(PDO::FETCH_ASSOC)){ ?>
                    <li monkey="lunbotu">
                        <p class="title"><?php echo $row1['title'] ?></p><a href="./show.php?id=<?php echo $row1['id'] ?>" target="_blank" title="<?php echo $row1['title'] ?>"><img src="<?php echo $row1['pic'] ?>" style="width:837px;height:296px;" /></a>
                    </li>
                    <?php } ?>
                </ul>
                
                <script type="text/javascript">
                    var num=$('.btnlist li').index('.clickon');
                    $(function () {
                        $('._next').click(function () {
                            num++;
                            $(".cul_list").animate({marginLeft:-$(".cul_list li").width()+"px"},600, function () {
                                $(".cul_list>li").eq(0).appendTo($(".cul_list"));
                                $(".cul_list").css('marginLeft','0px');
                                if(num==$('.btnlist li').length){num=0;}
                                $('.btnlist li').removeClass('clickon').eq(num).addClass("clickon");
                            });
                        });
                        $('._pre').click(function () {
                            num--;
                            $(".cul_list").css('marginLeft',-$(".cul_list li").width()+"px");
                            $(".cul_list>li").eq(4).prependTo($(".cul_list"));
                            $(".cul_list").animate({marginLeft:"0px"},600);
                            if(num<0){num=$('.btnlist li').length-1}
                            $('.btnlist li').removeClass('clickon').eq(num).addClass("clickon");
                        });
                        $('.btnlist').on('click','li',function(){
                            $('.btnlist li').removeClass('clickon').eq($(this).index()).addClass('clickon');
                            $(".cul_list").animate({marginLeft:-$(".cul_list li").width()*$(this).index()+'px'},600);
                        })
                    })
                </script>
            </div>
            <div class="today" monkey="jinri">
                <h1>今日精选</h1>
                <a href="./list.php?type=today" target="_blank" class="more" title="更多" monkey="more">更多>></a>
                <div class="choice">
                    <ul>
                       <?php while($row4=$res4->fetch(PDO::FETCH_ASSOC)){ ?>
        	           <li>
                            <div class="img_wap">
                                <a href="./show.php?id=<?php echo $row4['id'] ?>" target="_blank">   <img src="<?php echo $row4['pic'] ?>" alt="" monkey="img" title="<?php echo $row4['title'] ?>" style="width:247px;height:135px;">
                                </a>
                            </div>
                            <div class="today_content">
                                <a href="./show.php?id=<?php echo $row4['id'] ?>" target="_blank" monkey="text" title="<?php echo $row4['title'] ?>">
                                    <h1><?php echo $row4['title'] ?></h1>
                                    <p><?php echo mb_substr(strip_tags($row4['content']),0,40,'utf-8') ?>...</p>
                                </a>
                            </div>
                        </li>
        	            <?php } ?>
            		</ul>
                </div> 
            </div>
            <!-- 今日精选灵感end-->
            <div class="today domestic" monkey="guonei">
                <div class="tit">
                    <h1>发现国内灵感</h1>
                    <p>TA们是永不止步的发现者，就在刚刚又发布了新的国内灵感，小伙伴们快来关注</p>
                    <a href="./list.php?type=guonei" class="more" target="_blank" title="更多" monkey="more">更多>></a>
                </div>
                <div class="choice">
                    <ul>
            	        <?php while($row2=$res2->fetch(PDO::FETCH_ASSOC)){ ?>
                       <li>
                            <div class="img_wap">
                                <a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank">   <img src="<?php echo $row2['pic'] ?>" alt="" monkey="img" title="<?php echo $row2['title'] ?>" style="width:247px;height:135px;">
                                </a>
                            </div>
                            <div class="today_content">
                                <a href="./show.php?id=<?php echo $row2['id'] ?>" target="_blank" monkey="text" title="<?php echo $row2['title'] ?>">
                                    <h1><?php echo $row2['title'] ?></h1>
                                    <p><?php echo mb_substr(strip_tags($row2['content']),0,40,'utf-8') ?>...</p>
                                </a>
                            </div>
                        </li>
                        <?php } ?>
            		</ul>
                </div>
            </div>
            <!-- 发现国内灵感end-->
            <div class="today domestic" monkey="guoji">
                <div class="tit">
                    <h1>发现出境灵感</h1>
                    <p>TA们是永不止步的发现者，就在刚刚又发布了新的国内灵感，小伙伴们快来关注</p>
                    <a href="./list.php?type=jingwai" class="more" target="_blank" title="更多" monkey="more">更多>></a>
                </div>
                <div class="choice">
                    <ul>
            	         <?php while($row3=$res3->fetch(PDO::FETCH_ASSOC)){ ?>
                       <li>
                            <div class="img_wap">
                                <a href="./show.php?id=<?php echo $row3['id'] ?>" target="_blank">   <img src="<?php echo $row3['pic'] ?>" alt="" monkey="img" title="<?php echo $row3['title'] ?>" style="width:247px;height:135px;">
                                </a>
                            </div>
                            <div class="today_content">
                                <a href="./show.php?id=<?php echo $row3['id'] ?>" target="_blank" monkey="text" title="<?php echo $row3['title'] ?>">
                                    <h1><?php echo $row3['title'] ?></h1>
                                    <p><?php echo mb_substr(strip_tags($row3['content']),0,40,'utf-8') ?>...</p>
                                </a>
                            </div>
                        </li>
                        <?php } ?>
            	        
            		</ul>
                </div>
            </div>
            <!-- 发现出境灵感end-->
        </div>
        <div class="mian_r">
            <div class="today_tea">
                <h1>爱心推荐</h1>
                <div class="tea_info" monkey="author-jinri">
                    <a href="http://local.amskj.net/show.php?id=6516" target="_blank" title="">
                        <div class="tea_img">
                            <img src="http://img1.lotour.net/Inspiration/2016/0819/20160819170753278647591_910.jpg" alt="">
                        </div>
                        <p>作为最后一个加入联邦成为美国第50个州的夏威夷，是由132个呈新月形岛链的岛屿组成，不过其中124个可以忽略不计。</p>
                		<div class="view">
                			<span>浏览量</span>
                			<p class="view_num" id="topLgPv">367万+</p>
                		</div>
                		<div class="article">
                		    <span>灵感文数</span>
                			<p class="view_num" title="灵感文数" id="topLgCount">12</p>
                		</div>
                    </a>
                </div>
            </div>
            <div class="recommend">
                <div class="title">
                    <h1>草原驰骋</h1>
                </div>
                <div class="introduce">
                    <div class="quota"><img src="http://img1.lotour.net/zhuanti/hao123/quotation.jpg"/></div>
                    <p>TA们来自五湖四海，TA们背着行囊走遍世界，
                        TA们用探索的目光去发现这颗未知的星球
                        用经历与见识给万千人带来新的旅游灵感。</p>
                </div>
                <ul class="authors " deffer="1146,144,550,616,1640,1855" deffer1="" method="weekauthor" monkey="author-tuijian">
                    <?php while($row5=$res5->fetch(PDO::FETCH_ASSOC)){ ?>
                    <li>
                        <a href="./show.php?id=<?php echo $row5['id'] ?>" title="<?php echo $row5['title'] ?>" target="_blank">
                            <img src="<?php echo $row5['pic'] ?>" style="display: block;">
                            <h5><?php echo $row5['title'] ?></h5>
                    	</a>
                    </li>
                    <?php } ?>
                </ul>
                <div class="apply">
                </div>
                <!-- 每周优秀灵感旅行家推荐end-->
                <div class="title">
                    <h1>精品推荐</h1>
                </div>
                <ul class="authors internal" deffer="" deffer1="986,211331,202811,202331,201861,202296,202947" method="weekauthor" monkey="author-guonei">
                    <li>
                        <script type="text/javascript" src="http://i.haodianpu.com/show.php?aid=59&param=300*300"></script>
                    </li>
                    </ul>
                <!-- 国内旅游局专栏end-->
                <div class="title exit">
                    <h1>尽情玩乐</h1>
                    <a href="./list.php?type=youlechang" class="more" target="_blank" title="全部" monkey="author-guoji">全部>></a>
                </div>
                <ul class="authors internal" deffer="1586,1666,590,1541,1465,447,1008" deffer1="" method="weekauthor" monkey="author-guoji">
                    <?php while($row6=$res6->fetch(PDO::FETCH_ASSOC)){ ?>
                    <li>
                        <a href="./show.php?id=<?php echo $row6['id'] ?>" title="<?php echo $row6['title'] ?>" target="_blank">
                            <img src="<?php echo $row6['pic'] ?>" style="display: block;">
                            <h5><?php echo $row6['title'] ?></h5>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                <!-- 出境旅游局专栏end-->
            </div>
        </div>

        <!-- main_top  end-->
        <div class="main_bottom">
            <div class="index-srh">
                <p class="tt">
                    一个启发旅游灵感的网站<br>
                    只为新中产群体解决玩什么、去哪玩的问题。
                </p>
            </div>
            <div class="index-s-list" monkey="travel">
                <div class="in">
                    <a class="left hide" title=""></a>
                    <a class="right hide" title=""></a>
                    <ul class="clearfix">
		    			<li>
                            <a href="./list.php?type=pubu" class="img" target="_blank" title="瀑布"><img src="http://img4.lotour.net/bcef/theme//2016/0630/2016063015002153621683.jpg" />
                            <em><span>瀑布</span></em></a>
                            <p class="txt">
                                有97种瀑布灵感等你探索<br />
                                它们由80位旅行家亲历整理
                            </p>
                        </li>
				        <li>
                            <a href="./list.php?type=xiagu" class="img" target="_blank" title="峡谷">
                                <img src="http://img4.lotour.net/bcef/theme//2016/0630/2016063015055051529695.jpg" />
                                <em><span>峡谷</span></em>
                            </a>
                            <p class="txt">
                                有175种峡谷灵感等你探索<br />
                                它们由116位旅行家亲历整理
                            </p>
                        </li>
				        <li>
                            <a href="./list.php?type=mingxiao" class="img" target="_blank" title="名校">
                                <img src="http://img4.lotour.net/bcef/theme//2016/0614/2016061419230422646008.jpg" />
                                <em><span>名校</span></em>
                            </a>
                            <p class="txt">
                                有47种名校灵感等你探索<br />
                                它们由41位旅行家亲历整理
                            </p>
                        </li>
				        <li>
                            <a href="./list.php?type=caoyuan" class="img" target="_blank" title="草原">
                                <img src="http://img4.lotour.net/bcef/theme//2016/0614/201606141902515063835.jpg" />
                                <em><span>草原</span></em>
                            </a>
                            <p class="txt">
                                有173种草原灵感等你探索<br />
                                它们由121位旅行家亲历整理
                            </p>
                        </li>
				        <li>
                            <a href="./list.php?type=qinzi" class="img" target="_blank" title="亲子">
                                <img src="http://img4.lotour.net/bcef/theme//2016/0630/2016063015072912691888.jpg" />
                                <em><span>亲子</span></em>
                            </a>
                            <p class="txt">
                                有205种亲子灵感等你探索<br />
                                它们由115位旅行家亲历整理
                            </p>
                        </li>
				        <li>
                            <a href="./list.php?type=youlechang" class="img" target="_blank" title="游乐场">
                                <img src="http://img4.lotour.net/bcef/theme//2016/0603/2016060315210934289992.jpg" />
                                <em><span>游乐场</span></em>
                            </a>
                            <p class="txt">
                                有110种游乐场灵感等你探索<br />
                                它们由94位旅行家亲历整理
                            </p>
                        </li>
                </div>
            </div>
        </div>
    </div>
</body>
</html>