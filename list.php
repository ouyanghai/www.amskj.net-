<?php 
include("./header.php"); 

$size = 10;
$type = !empty($_GET['type'])?$_GET['type']:'';
$ctype = !empty($type) ? "and ctype='{$type}'" : '';
$sql = "select count(id) from `tg_lvyou` where 1=1 {$ctype}";
$res = $command->prepare($sql);
$res->execute();
$row = $res->fetch(PDO::FETCH_NUM);
$pages = ceil($row[0]/$size);
$cur_page = !empty($_GET['page'])&&is_numeric($_GET['page']) ?($_GET['page']>0&&$_GET['page']<=$pages ? $_GET['page'] : 1):1;

$start = ($cur_page-1)*$size;
$sql = "select id,title,pic from `tg_lvyou` where 1=1 {$ctype} limit {$start},{$size};";
$res = $command->prepare($sql);
$res->execute();
?>



<div class="xq">
	<div class="main">
		<!-- 检索区 -->
		<div class="indexesbox">
			<div class="indexes indexesbar">
				<div class="inblock zuixin"><a class='on' href='#' title='最新'>最新</a></div>
				<div class="inblock zuire"><a class='' href='#' title='最热'>最热</a></div>
			</div>
		</div>
		<!-- 内容区 -->
		<div class="content">
			<?php while($row = $res->fetch(PDO::FETCH_ASSOC)){ ?>
			<div class="revealator-skewright">
				<div class="box ">
					<div class="pic">
						<a href="./show.php?id=<?php echo $row['id'] ?>" target="_blank" title="">
						     <img style="width:590px;height:380px;" src="<?php echo $row['pic'] ?>"  alt="">
						     <span class="bgbg"></span>
						</a>
					</div>
					<div class="wenzi">
						<div class="tex">
							<a href="./show.php?id=<?php echo $row['id'] ?>" title="" target="_blank" class="tit">
								<?php echo $row['title'] ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	
		<div class="more-txt">
			<div class="page">
			<?php if($cur_page == 1){ ?>
                    <a class="a1" disabled="disabled">首页</a>
                    <a class="a1" disabled="disabled">上一页</a>
                <?php }else{ ?>
                    <a class="a1" href="./list.php?page=1{<?php echo '&type='.$type; ?>}">首页</a>
                    <a class="a1" href="./list.php?page=<?php echo ($cur_page-1).'&type='.$type; ?>">上一页</a>
                <?php } ?>
                <?php 
                    $s_page = $cur_page-4>0?$cur_page-4:1;
                    $e_page = $cur_page+5>$pages?$pages:$cur_page+5;
                    for($i=$s_page;$i<=$e_page;$i++){
                        if($i == $cur_page){
                            echo '<a >'.$i.'</a>';
                        }else{ ?> 
                            <a href='./list.php?page=<?php echo $i.'&type='.$type;?>'><?php echo $i;?></a>
                <?php }} ?>
                
                <?php if($pages == $cur_page){ ?>
                    <a class="a1" disabled="disabled">下一页</a>
                    <a class="a1" disabled="disabled">尾页</a>
                <?php }else{ ?>
                    <a class="a1" href="./list.php?page=<?php echo ($cur_page+1).'&type='.$type; ?>">下一页</a>
                    <a class="a1" href="./list.php?page=<?php echo $pages.'&type='.$type; ?>">尾页</a>
                <?php } ?>
            </div>
		</div>
	
</div>


<?php include("./footer.php"); ?>