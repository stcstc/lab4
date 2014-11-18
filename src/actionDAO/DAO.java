package actionDAO;

import javax.naming.*;

import java.util.*;
import java.sql.*;

import getconnection.*;
import userModel.*;

public class DAO {
	
	Connection conn;
	getconnection getconn;
	private Statement stmt;
	private Statement stmt1;
	private PreparedStatement pstmt;
	private PreparedStatement pstmt1;
	private int res;
	private ResultSet res1;
	
	
	public DAO() 
			throws InstantiationException, IllegalAccessException, 
			ClassNotFoundException, SQLException
	{
		if(conn==null)
			conn=getconn.getConnection();	
	}
	
	public int insertUser(User u) throws SQLException
	{
		/*stmt = conn.createStatement();
		res = stmt.executeUpdate(
				"insert into teacher value(lizhijun,1970);"
				);*/
		pstmt=conn.prepareStatement("insert into author (AuthorID,Name,Age,Country) values (?,?,?,?)");
		pstmt.setString(1, u.getUsername());
		pstmt.setString(2, u.getPassword());
		pstmt.executeUpdate();
		return 0;
		
	}
	
	
	
	
}
