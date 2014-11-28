<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：独立分组</title>
 
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{  color: #333;}
	h2{font-size:36px}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#F60; border-bottom:1px dashed gray}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto;margin:2px}
	</style>
 </head>
  <body bgcolor="#d0d0d0"></body>
  <h2>选课结果</h2>
 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>我<?php echo ($vi["student"]); ?>------------------任课老师<?php echo ($vi["teacher"]); ?> ------------------课程名称<?php echo ($vi["classname"]); ?>------------------<?php echo ($vi["month"]); ?>月------------------<?php echo ($vi["day"]); ?>日------------------<?php echo ($vi["hour"]); ?>:<?php echo ($vi["minute"]); ?>      
 <A href ="<?php echo U("home/Index/del?id=$vi[student]&action=$vi[teacher]&name=$vi[classname]");?>">删除 <br></a><?php endforeach; endif; else: echo "" ;endif; ?>
<A href ="<?php echo U("home/Index/insert2?id=$student");?>">添加课程 <br></a> 

<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>老师<?php echo ($vo["man1"]); ?>------------------我:<?php echo ($vo["man2"]); ?> ------------------<?php echo ($vo["month"]); ?>月------------------<?php echo ($vo["day"]); ?>日------------------<?php echo ($vo["hour"]); ?>:<?php echo ($vo["minute"]); ?>--<?php echo ($vo["message"]); ?>    约到了<br><?php endforeach; endif; else: echo "" ;endif; ?>
<A href ="<?php echo U("home/Index/inserttime1?id=$student");?>">单约 <br></a>
 </body>
</html>