package net.hncu.struts2.action;
import org.apache.struts2.ServletActionContext;
import login.LoginCheck;
public class LoginAction {
	private String uname;
	private String upassword;
	
	//ªÒµ√uname÷µ
	public String getUname()
	{
		return uname;
	}
	public void setUname(String uname)
	{
		this.uname = uname;
	}
	public String getUpassword()
	{
		return uname;
	}
	public void setUpassword(String upassword)
	{
		this.upassword = upassword;
	}
	
	public String execute()throws Exception
	{
		LoginCheck lc = new LoginCheck();
		
		if(lc.isLogin(getUname(),getUpassword()))
		{
			ServletActionContext.getRequest().setAttribute("login", "true");
			return "success";
		}
		else
		{
			return "failure";
		}
	}
}
