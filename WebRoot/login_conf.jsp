<%@ page language="java" import="java.util.*" pageEncoding="ISO-8859-1"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>登陆判断</title>
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  
  <body>
   	<%//接受请求的内容
   		String name = request.getParameter("uname");
   		String password = request.getParameter("upassword");
   	%>
    <%//判断用户名及密码
   		if("xiaoqiang".equals(name)&&"xiaoqiang".equals(password)){
   		//合法用户
   		//在request范围中添加属性login，其属性值为true
   			request.setAttribute("login", "true");
   	%>
   			<jsp:forward page="login_success.jsp"/>
   	<%
   		}else{
   		//非法用户
   	%>
   			<jsp:forward page="login_failure.jsp"/>
   	<%
   		}
   	%>
  </body>
</html>
