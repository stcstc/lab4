<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>addclass</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "Î¢ÈíÑÅºÚ"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#F60; border-bottom:1px dashed gray}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto;margin:2px}
	</style>
 </head>
 <body>
 <div class="main">
 <h2>addclass</h2><br>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i; echo ($vi["teacher"]); ?> ------------------<?php echo ($vi["classname"]); ?>------------------<?php echo ($vi["month"]); ?>------------------<?php echo ($vi["day"]); ?>------------------<?php echo ($vi["hour"]); ?>------------------<?php echo ($vi["minute"]); ?>  
 <A href ="<?php echo U("home/Index/inr?id=$vi[teacher]&action=$kk ");?>">add <br></a><?php endforeach; endif; else: echo "" ;endif; ?>

</div>
 </body>
</html>