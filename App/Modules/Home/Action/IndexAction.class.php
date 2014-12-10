<?php
// +----------------------------------------------------------------------
// | TOPThink [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$
class IndexAction extends Action{
    public function index(){
        $Model  =   M('Form');
		$data=$Model->where('')->select();
		$this->assign('list',$data);
		//echo $data;
		//echo 3;
		$this->display();
		//echo 1;
    }

	public function add(){
		$Model= M('teachers'); 
		$data=$Model->where('')->select();
		$this->assign('list1',$data);
		//echo $data;
		//echo 1;
		$this->display();

    }
	
		public function insert(){
		$this->display('insertl');
		}
		public function inserttime(){
		$this->display('insertt');
		//echo 1;
		}
		
		
		public function inserttime1(){
		$Model= M('yuyue');
		$student=$_GET['id'];
		$data=$Model->where("")->select();
		$this->assign('data',$data);
		$this->assign('student',$student);
		$this->display('showtime1');
		}
		
		
		
		public function insertter(){
		$Model= M('yuyue');
		$MOD= M('teacher');
		$MD = M('result');
		$tn=$_POST["man1"];
		$mon=$_POST["month"];
		$day=$_POST["day"];
		$hour=$_POST["hour"];
		$min=$_POST["minute"];
		$message=$_POST["message"];
		$num=$Model->where("(man1='".$tn."') AND (day='".$day."') AND (hour='".$hour."')")->find();
		if($num==0){
		$Model->create();
		$Model->add();
		$condition->man1=$tn;
		$data1=$Model->where($condition)->select();
		$this->assign('data1',$data1);
		$data2=$MD->where($condition)->select();
		$this->assign('data2',$data2);		
		$this->display('add');
		
		}
		else{
		$data1=$Model->where("man1='".$tn."'")->select();
		$this->assign('data1',$data1);
		$condition->man1=$tn;		
		$data2=$MD->where($condition)->select();
		$this->assign('data2',$data2);
		$this->display('add');
		}
		
		
		}
		
		public function insert2(){
		$Model= M('classes');
		$student=$_GET['id'];
		$data=$Model->where('')->select();
		$this->assign('data',$data);
		$this->assign('student',$student);
		echo $student;
		$this->display('insertclass1');
		}
		
		public function inry(){
		$User = M("yuyue"); // 实例化User对象
		$MOD =  M("result");
		$Model = M("kb");
		$vi=$_GET['id'];
		$student=$_GET['action'];
		$message=$_GET['name'];
		//echo $vi;
		//echo $class;
		
        $condition->man1=$vi;
		$condition->message=$message;

		$data1=$User->where($condition)->find();
	    $User->where($condition)->delete();
		//echo $name;
		//echo $data1[month];
		$km['man1']=$data1['man1'];
		$km['message']=$data1['message'];
		$km['month']=$data1['month'];
		$km['day']=$data1['day'];
		$km['hour']=$data1['hour'];
		$km['minute']=$data1['minute'];
		$km['man2']=$student;
		//echo "<br/>";
		//echo $km['hour'];
		$MOD->add($km);
		$data=$Model->where("student='".$student."'")->select();
		$data2=$MOD->where("man2='".$student."'")->select();
		$this->assign('data',$data);
		$this->assign('data2',$data2);
		$this->assign('student',$student);
        $this->display('show');		
	}
		
	    public function insertclass(){
        $Model= M('classes');
		$MOD= M('teacher');
		$User =M('yuyue');
		$MD =M('result');
		$tn=$_POST["teacher"];
		$cn=$_POST["classname"];
		$mon=$_POST["month"];
		$day=$_POST["day"];
		$hour=$_POST["hour"];
		$min=$_POST["minute"];
		$num=$Model->where("(teacher='".$tn."') AND (classname='".$cn."')")->find();
		if($num==0){
		$Model->create();
		$Model->add();
		$condition->teacher=$tn;
		$condition->classname=$cn;
		$data1=$Model->where($condition)->find();
		$data1['mima']=0;
		$data=$Model->where("teacher='".$tn."'")->select();
		$this->assign('data',$data);
		$this->display('add');
		$data1=$User->where("man1='".$tr."'")->select();
		$this->assign(data1,$data1);		
		$data2=$MD->where("man1='".$tr."'")->select();
		$this->assign(data2,$data2);		
		}
		else{
		$data=$Model->where("teacher='".$tn."'")->select();
		$this->assign('data',$data);
		$data=$User->where("man1='".$tr."'")->select();
		$this->assign(data1,$data1);		
		$data=$MD->where("man1='".$tr."'")->select();
		$this->assign(data2,$data2);		

		$this->display('add');
		}
    }
	public function del(){
		$Model =M ('classes');
		$User = M("kb"); // 实例化User对象
		$MOD = M('result');
		$student=$_GET['id'];
		$teacher=$_GET['action'];
		$classname=$_GET['name'];
		//echo $vi;
		//echo 1;
		$condition->teacher=$teacher;
		$condition->classname=$classname;
		$data1=$Model->where($condition)->find();
		$data1[mima]=$data1[mima]-1;
		$Model->where($condition)->save($data1);
		
		$condition->student=$student;
		$condition->teacher=$teacher;
		$condition->classname=$classname;
		$this->assign('student',$student);
		$User->where($condition)->delete();
		$data=$User->where("student='".$student."'")->select();
		$this->assign('data',$data);
		$data2=$MOD->where("man2='".$student."'")->select();		
		$this->assign('data2',$data2);		
		$this->display('show');
		
	}
	
	public function inr(){
		$User = M("classes"); // 实例化User对象
		$MOD =  M("kb");
		$vi=$_GET['id'];
		$student=$_GET['action'];
		$class=$_GET['name'];
		//echo $vi;
		//echo $class;
		
        $condition->teacher=$vi;
		$condition->classname=$class;
		$data1=$User->where($condition)->find();
		$data1[mima]=$data1[mima]+1;
		$num=$MOD->where("(student='".$student."') AND (teacher='".$vi."') AND (classname='".$class."')")->find();
		if ($num==0) $data1[mima]=$data1[mima];
		else {
		$data1[mima]=$data1[mima]-1;
		goto l;
		}
		$User->where($condition)->save($data1);
		//echo $name;
		//echo $data1[month];
		$km['teacher']=$data1['teacher'];
		$km['classname']=$data1['classname'];
		$km['month']=$data1['month'];
		$km['day']=$data1['day'];
		$km['hour']=$data1['hour'];
		$km['minute']=$data1['minute'];
		$km['student']=$student;
		//echo "<br/>";
		//echo $km['hour'];
		$MOD->add($km);
	l:  $data=$MOD->where("student='".$student."'")->select();
		$this->assign('data',$data);
		$this->assign('student',$student);
        $this->display('show');		
	}
	
	
    public function read($id=0){
        $Model  =   D('Form');
        $this->assign('vo',$Model->getDetail($id));
        $this->display();
    }
	
	public function joinin(){
        $Model= M('students');
		$MOD= M('classes');
		$pw=$_POST["student"];
		$st=$_POST["mima"];
		$Model->create();		
		$Model->add();
		$this->display('index');
    }
	public function joinintr(){
        $Model= M('teachers');
		$MOD= M('classes');
		$pw=$_POST["teacher"];
		$st=$_POST["mima"];
		//echo $pw;
		//echo $st;
		$Model->create();		
		//$Model->student=$st;
		//$Model->mima=$pw;
		
		$Model->add();
		//$MOD->create();
		
		//$MOD->student=$st;
		//$MOD->password=$pw;
		//$MOD->add();
		//$this->assign('list',$data);
		$this->display('index');
    }
	
	
	public function login(){
	    $Model= M('students');
		$MOD= M('kb');
		$User = M('result');
		$pw=$_POST["password"];
		$st=$_POST["student"];
		$num=$Model->where("(student='".$st."') AND (mima='".$pw."')")->find();
		if($num==0)
		$this->error("denglushibai");
		else
		{
		$student=$num['student'];
		$data=$MOD->where("student='".$student."'")->select();
		$this->assign(data,$data);
		$this->assign(student,$student);
		$data2=$User->where("man2='".$st."'")->select();
		$this->assign(data2,$data2);	
		//echo $student;
		$this->display("show");
		}
		}
		public function logintr(){
	    $Model= M('teachers');
		$MOD= M('classes');
		$User = M('yuyue');
		$MD = M('result');
		$tr=$_POST["teacher"];
		$pw=$_POST["password"];
		$num=$Model->where("(teacher='".$tr."') AND (mima='".$pw."')")->find();
		if($num==0)
		$this->error("denglushibai");
		else
		{
		$teacher=$num['teacher'];
		$data=$MOD->where("teacher='".$tr."'")->select();
		$this->assign(data,$data);
		$data1=$User->where("man1='".$tr."'")->select();
		$this->assign(data1,$data1);		
		$data2=$MD->where("man1='".$tr."'")->select();
		$this->assign(data2,$data2);		
		$this->display("add");
		}
		}
		//public function
	/* function checkLogin()

    {

  // 这里使用用户名、密码和状态的方式进行认证。这里是discuz6.1，discuz5的加密方式不一样。用discuz5的话你需要修改下面这一句。

//注意！！！这里直接把$_POST['name']和$_POST['password']放到查询语句中是不安全的。请先进行处理！我是自己处理的，这里没有贴。我在找ThinkPHP中的处理函数，还没有找到。

  $authInfo = examples::authenticate("`username`='".$_POST['name']."' AND `password` = md5(concat(md5('".$_POST['password']."'),`salt`))");

  if(false === $authInfo) {

   echo '登录失败，请检查用户名和密码是否有误！';

  }else {

   // 设置认证识别号

   session_register(C('USER_AUTH_KEY'));

   session_register('loginid');

   $_SESSION[C('USER_AUTH_KEY')] = $authInfo["uid"]; // 这里用户表的id字段

   $_SESSION["loginid"] = $authInfo["username"];// 这里用户表的用户名字段

   //获取并保存用户访问权限列表

   examples::saveAccessList();

   dump($_SESSION);

   echo strtoupper(APP_NAME)." ".strtoupper(MODULE_NAME)." ".strtoupper(ACTION_NAME);

  }

    }*/
		
}