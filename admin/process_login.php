<?php session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username!=""&&$password!="")
  {
$link=mysql_connect("localhost","root","1234")or die("can not linkect");
mysql_select_db("bloodbank",$link) or die("can not select database");

$query= "select username,password from admin where username='$username'";
$result= mysql_query($query,$link) or die("wrong query");
$row = mysql_fetch_assoc($result);

if($row['username']==$username && $row['password']==$password)
		  {		  
		    $_SESSION['user']=$row['username'];
			header("location:admin_home.php");		  
		  }
else
{
echo "Invalid username and password";	 
}  	 
mysql_close($link);  
} else{

echo "<script>alert('Invalid Login credintials'); window.location='index.php';</script>";

}
?>