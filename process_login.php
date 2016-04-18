<?php session_start();
 session_start();


$_SESSION['id']= $row['user_id'];


$_SESSION['name']= $row['user_fullname'];

    $link=mysql_connect("localhost","root","1234")or die("can not connect");
	mysql_select_db("bloodbank",$link) or die("can not select database");	
	$q = "select * from user where user_email= '".$_POST['username']."'";
	$res = mysql_query($q,$link) or die("wrong query");
	$row = mysql_fetch_assoc($res);
	
	if(!empty($row))
	{	if($_POST['password']==$row['user_password'])
		{
			$_SESSION = array();			
			$_SESSION['fullname']=$row['user_fullname'];
			$_SESSION['status']=1;
			$_SESSION['user']=1;
			$_SESSION['user_id']=$row['user_id'];
			header("location:./");
		}
		else
		{
		echo '<script>alert(" Email and Password does not match");window.location=("./");</script>';
		}
	}
	else
	{
	echo '<script>alert(" Enter a valid Email and Password");window.location=("./");</script>';

	}
?>