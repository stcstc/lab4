package net.hncu.struts2.action;
import org.apache.struts2.ServletActionContext;
import login.LoginCheck;
import com.opensymphony.xwork2.ActionSupport;

public class LoginAction  {
	private String uname;
	private String upassword;
	
	//���unameֵ
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
		return upassword;
	}
	public void setUpassword(String upassword)
	{
		this.upassword = upassword;
	}
	//ִ������У��
	
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
