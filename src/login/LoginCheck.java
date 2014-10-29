package login;

public class LoginCheck {
	//判断是否为合法用户
	public boolean isLogin(String name,String password)
	{
		if(("xiaoqiang".equals(name))&&("xiaoqiang".equals(password)))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
