<%@ page language="java" import="java.util.*" pageEncoding="ISO-8859-1"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>
<%@taglib prefix="s" uri="/struts-tags"%>
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
    <a href="http://fam:8080/my/register.jsp">注册</a>
    <%--登录表单 --%>
    <s:form action="login">
    	<s:textfield name="uname" label="用户名"></s:textfield>
    	<s:password name="upassword" label="密码"></s:password>
    	<s:submit ></s:submit>
    	<s:reset ></s:reset>
    </s:form>
  </body>
</html>
