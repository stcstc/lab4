<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>课程添加</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
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
 <h2>添加课程</h2><br>
 <form action="/index.php/home/Index/insertclass" method="post">
  老师名字：<input type="text" name="teacher" ><br>
  课程名字：<input type="text" name="classname" ><br>
  预约时间：<input type="text" name="month" >月<input type="text" name="day" >日<input type="text" name="hour" >时<input type="text" name="minute" >分<br>
 <input type="submit" value="添 加" class="submit medium hMargin">
 </form>
</div>
 </body>
</html>