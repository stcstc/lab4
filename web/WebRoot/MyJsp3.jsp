<%@ page language="java"  pageEncoding="UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>

<html>
  <body>
    <h2><center>查询页面</center></h2>
    <center>
    <a href='categoryList.action'>返回主页</a>
    <s:form action="searchCategory" namespace="/" method="post">
    <s:textfield name="name" label="作者ID"></s:textfield>
    <s:submit value="确定"></s:submit>
    </s:form>
    </center>
  </body>
</html>
