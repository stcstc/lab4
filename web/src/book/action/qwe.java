package book.action;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import book.db.categoryDAO;
import book.model.Category;

import com.opensymphony.xwork2.ActionSupport;

public class categoryAction extends ActionSupport{
	private Category c;
	private List<Category> categoryList;
	private List<Category> categoryLt;
	private String id;
	private String name;
	private categoryDAO cd;
	private int p=1;
	private int lastPage;
	
	public categoryAction()
	{
		cd=new categoryDAO();
	}
	
	public Category getC()
	{
		return c;
	}
	
	public void setC(Category c)
	{
		this.c=c;
	}	
	
	public List<Category> getCategoryList()
	{
		return categoryList;
	}
	
	public void setCategoryList(ArrayList categoryList)
	{
		this.categoryList=categoryList;
	}
	
	public List<Category> getCategoryLt()
	{
		return categoryLt;
	}
	
	public void setCategoryLt(ArrayList categoryLt)
	{
		this.categoryLt=categoryLt;
	}
	
	public String getId()
	{
		return id;
	}
	
	public void setId(String id)
	{
		this.id=id;
	}
	
	public String getName()
	{
		return name;
	}
	
	public void setName(String name)
	{
		this.name=name;
	}
	
	public int getP()
	{
		return p;
	}
	
	public void setP(int p)
	{
		this.p=p;
	}
	
	public int getLastPage(){
		return lastPage;
	}
	
	public void setLastPage(int lastPage)
	{
		this.lastPage=lastPage;
	}
	
	public String getALLCategory()
	{
		int pageS=5;
		this.categoryList=cd.getCategorylist();
		int listLength=this.categoryList.size();
		if(listLength % pageS==0)
			this.lastPage=listLength/pageS;
		else
			this.lastPage=listLength/pageS+1;
		if(this.p<1)
			this.p=1;
		if(this.p>this.lastPage)
			this.p=this.lastPage;
		int startIndex=(this.p-1)*pageS;
		int endIndex=startIndex+pageS;
		if(endIndex>=listLength)
			endIndex=listLength;
		this.categoryList= this.categoryList.subList(startIndex, endIndex);
		System.out.println(this.categoryList.isEmpty());
		return SUCCESS;
	}
	
	public String searchCategory()
	{
		System.out.println(this.name);
		this.categoryLt=cd.searchCategorylist(this.name);
		//System.out.println(!this.categoryLt.isEmpty());
		return SUCCESS;
	}
	
	public String addCategory()
	{
		int jg=cd.addCategory(this.c,this.id);
		System.out.println(this.id);
		if(jg!=0)
			return SUCCESS;
		else
			return ERROR;
	}
	
	public String getCategory()
	{
		this.c=cd.getCategoryById(id);
		return SUCCESS;
	}
	
	public String editCategory()
	{
		if(cd.editCategory(this.c)==1)
			return SUCCESS;
		else
			return ERROR;
	}
	
	public String delCategory()
	{
		if(cd.delCategory(this.id)==1)
			return SUCCESS;
		else
			return ERROR;
	}
}
