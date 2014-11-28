<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>addclass</title>
 
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ color: #333;}
	h2{font-size:36px}
	h3{font-size:36px;font-weight:normal}
	a{text-decoration:none; color:#174B73; border-bottom:1px dashed gray}
	a:hover{color:#F60; border-bottom:1px dashed gray}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto;margin:2px}
	</style>
 </head>
  <body bgcolor="#d0d0d0">
<h2>添加课程</h2>
 
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?>我的课程：<?php echo ($vi["teacher"]); ?>------------------选课人数：<?php echo ($vi["mima"]); ?> ------------------课程名称:<?php echo ($vi["classname"]); ?>------------------<?php echo ($vi["month"]); ?>月------------------<?php echo ($vi["day"]); ?>日------------------<?php echo ($vi["hour"]); ?>:<?php echo ($vi["minute"]); ?>  <br><?php endforeach; endif; else: echo "" ;endif; ?>
<form action="/index.php/home/Index/insert " method="post">
<input type="submit" value="addclass" class="submit medium hMargin">
 </form>
<h2>空闲时间<h2>
<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>我的预约：<?php echo ($vo["man1"]); ?> ------------------<?php echo ($vo["month"]); ?>月------------------<?php echo ($vo["day"]); ?>日------------------<?php echo ($vo["hour"]); ?>:<?php echo ($vo["minute"]); ?>--------留言:<?php echo ($vo["message"]); ?>  <br><?php endforeach; endif; else: echo "" ;endif; ?>
<h2>单约结果<h2>
<?php if(is_array($data2)): $i = 0; $__LIST__ = $data2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vm): $mod = ($i % 2 );++$i;?>我的预约：<?php echo ($vm["man1"]); ?> ---------<?php echo ($vm["man2"]); ?>---------<?php echo ($vm["month"]); ?>月------------------<?php echo ($vm["day"]); ?>日------------------<?php echo ($vm["hour"]); ?>:<?php echo ($vm["minute"]); ?>--------留言:<?php echo ($vm["message"]); ?>  <br><?php endforeach; endif; else: echo "" ;endif; ?>
 <form action="/index.php/home/Index/inserttime " method="post">
<input type="submit" value="我要单约" class="submit medium hMargin">
 </form>
 </body>
</html>