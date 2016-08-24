<?php 
include("./header.php"); 
$id = !empty($_GET['id']) ? $_GET['id'] : 0;
$sql = "select * from `tg_lvyou` where id=:id";
$res = $command->prepare($sql);
$res->execute(array(":id"=>$id));
$row = $res->fetch(PDO::FETCH_ASSOC);
?>
   

    
   
<div class="ia-main" style="margin-bottom:60px;">
<div class="ia-con clearfix">
    <div class="ia-right" style="float:none;margin:0 auto;">
        <div class="introduce">
            <p class="_pre"></p>
            <p class="_next"></p>
            <ul class="ind_list">
                <li>
                    <?php echo $row['title'] ?>
                </li>
            </ul>
        </div>
        <div class="ia-text">
    	    <div class="height-box">
                <div class="text-height">
                    <?php echo $row['content']; ?>
                </div>
        	</div>
            <div class="ia-text" style="height:50px; margin-top:30px;">
            	<div class="from">
                	<p class="letu-zhuan">
                        <span>发布：<?php echo $row['ctime'] ?></span>
             		</p>
            	</div>
            </div>
		</div>
    </div>
</div>
</div>

<?php include("./footer.php"); ?>