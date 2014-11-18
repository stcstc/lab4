package getconnection;
import java.sql.*;

public class getconnection 
{
	Connection conn;
	public Connection getConnection()
			throws InstantiationException, IllegalAccessException, 
			ClassNotFoundException, SQLException {
		Class.forName("com.mysql.jdbc.Driver").newInstance();
		conn = DriverManager.getConnection(
				"jdbc:mysql://localhost:3306/user", "root","stc199403220858" );
		return conn;
/*		Statement stmt;
		int res;
		Class.forName("com.mysql.jdbc.Driver").newInstance();
		conn = DriverManager.getConnection(
				"jdbc:mysql://localhost:3306/user", "root","stc199403220858" );
		stmt = conn.createStatement();
		res = stmt.executeUpdate(
				"insert into teacher value(lizhijun,1970);"
				
				
				);*/
	}
}
