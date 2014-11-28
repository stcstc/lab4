<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>预约添加</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #FFEBCD; color: #333;}
	h2{font-size:36px}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#F60; border-bottom:1px dashed gray}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto;margin:2px}
	</style>
 </head>
 <body>
 <div class="main">
 <h2>加预约</h2><br>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>tername：<?php echo ($vi["man1"]); ?> ------------------<?php echo ($vi["month"]); ?>month------------------<?php echo ($vi["day"]); ?>day------------------<?php echo ($vi["hour"]); ?>:<?php echo ($vi["minute"]); ?>-------留言：<?php echo ($vi["message"]); ?> 
 <A href ="<?php echo U("home/Index/inry?id=$vi[man1]&action=$student&name=$vi[message]");?>">add <br></a><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
 </body>
</html>