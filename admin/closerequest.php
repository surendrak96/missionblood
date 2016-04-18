<?php 

$id=$_GET['id'];

$con=mysql_connect("localhost","root","1234") or die("unable to connect");
mysql_select_db("bloodbank",$con) or die("unable to select db");
$sql="UPDATE blood_request SET request_status='CLOSED'   where  request_id=$id";
$query=mysql_query($sql,$con);
if($query){
	echo '<script>';
	echo 'alert("CLOSED");';
	echo 'window.location="blood_request.php";';
	 
	echo '</script>';
}
else{
	echo "fail";
}


?>
