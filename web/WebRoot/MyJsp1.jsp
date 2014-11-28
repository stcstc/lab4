<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>

<html>
  <body>
    <h2><center>查询结果</center></h2>
    <center>
    <h2>图书类别列表</h2>
    <a href='categoryList.action'>返回</a>
    <table border="1">
    <tr bgcolor="#33CCFF">
    <td align="center">ISBN</td>
    <td align="center">图书名称</td>
    <td align="center">作者ID</td>
    <td align="center">删除图书信息</td>
    </tr>
    <s:iterator value="categoryLt"> 
    <tr>
    <td align="center"><s:property value="id" /></td>
    <td align="center"><a href='<s:url action="getCategory" namespace="/">
    <s:param name="id" value="id"></s:param>
    </s:url>'><s:property value="name" /></a></td>
    <td align="center"><s:property value="author" /></td>
     <td align="center"><a href='<s:url action="delCategory" namespace="/">
    <s:param name="id" value="id"></s:param>
    </s:url>'>删除</a></td>
    </tr>
    </s:iterator>
    </table>
    </center>
  </body>
</html>
