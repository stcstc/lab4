package login;

public class LoginCheck {
	//�ж��Ƿ�Ϊ�Ϸ��û�
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
