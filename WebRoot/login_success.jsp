<%@ page language="java" import="java.util.*" pageEncoding="ISO-8859-1"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    
    <title>登陆成功</title>
    
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  
  <body>
  <center>
  	<%
  		if(request.getAttribute("login") != null && request.getAttribute("login").equals("true")){
  	%>
  	<h2>登陆成功</h2>
  	<%
  		}else{
  	%>
  			<jsp:forward page="login.jsp"></jsp:forward>
  	<%
  		}
  	%> 
  </center>
  </body>
</html>
