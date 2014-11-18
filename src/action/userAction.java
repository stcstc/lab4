package action;

import java.sql.SQLException;

import actionDAO.*;
import userModel.*;
public class userAction {
	private User u;
	private DAO cd;
	public userAction() 
			throws InstantiationException, IllegalAccessException, 
			ClassNotFoundException, SQLException
	{
		cd = new DAO();
	}
	public int insertUser() throws SQLException
	{
		int j = cd.insertUser(this.u);
		return 0;
		
	}
}
/*
public String addCategory()
{
	int jg=cd.addCategory(this.c,this.id);
	System.out.println(this.id);
	if(jg!=0)
		return SUCCESS;
	else
		return ERROR;
}
*/