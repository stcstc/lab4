<%@ page language="java" import="java.util.*" pageEncoding="ISO-8859-1"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
   <base href="<%=basePath%>">
   <title>用户登录</title>
   
    
 	<base href="<%=basePath%>">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<link rel="stylesheet" type="text/css" href="styles.css">


  </head>
  
  <body>
    <h2>用户登录</h2> <br>
    <%--登录表单 --%>
    <form action="login" method="post">
    <table>
    	<tr>
    		<td>用户名：</td>>
    		<%--接受用户输入的用户名，其name属性为uname --%>
    		<td><input type="text" name="uname"></td>
    	</tr>
    	<tr>
    		<td>密&nbsp;&nbsp;码:</td>>
    		<%--接受用户输入的密码，其name属性为upassword --%>
    		<td><input type="password" name="upassword"></td>
    	</tr>
    	<tr>
    		<%--登陆按钮和重置按钮 --%>
    		<td><input type="submit" value="登陆"></td>
    		<td><input type="submit" value="重置"></td>
    	</tr>	
    </table>
    </form>
  </body>
</html>
