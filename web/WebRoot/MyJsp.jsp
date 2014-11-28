<%@ page language="java"  pageEncoding="UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>

<html>
  <body>
    <h2><center>图书详细信息</center></h2>
    <center>
    <a href='categoryList.action'>返回主页</a>
    <s:form action="editCategory" namespace="/" method="post">
    <s:textfield name="c.name" label="书名"></s:textfield>
    <s:textfield name="c.author" label="作者ID"></s:textfield>
    <s:textfield name="c.arname" label="作者姓名"></s:textfield>
    <s:textfield name="c.arage" label="作者年龄"></s:textfield>
    <s:textfield name="c.arcountry" label="作者国籍"></s:textfield>
    <s:textfield name="c.Publisher" label="出版社"></s:textfield>
    <s:textfield name="c.PublishDate" label="出版日期"></s:textfield>
    <s:textfield name="c.price" label="价格"></s:textfield>
    <s:hidden name="c.id"></s:hidden>
    <s:submit value="确定修改"></s:submit>
    </s:form>
    </center>
  </body>
</html>

