<?php
//session_start();

if(empty($_POST))
{exit();}
 $patientname=$_POST['patientname'];
 $status="OPEN";
 $hospital=$_POST['hospital']; 
 $place=$_POST['place']; 
 $district=$_POST['district']; 
 $email=$_POST['email']; 
 $requiredon=$_POST['on'];
 
 $bloodgroup=$_POST['bloodgroup'];
 $contactperson=$_POST['contactperson'];

 $contactno=$_POST['contactno']; 
 
$link=mysql_connect("localhost","root","1234")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "INSERT into blood_request
 (request_patientname,request_hospital,request_place,request_district,request_email,request_requiredon,request_bloodgroup,request_contactperson,request_contactno,request_status) values
			('{$patientname}','{$hospital}','{$place}','{$district}','{$email}','{$requiredon}','{$bloodgroup}','{$contactperson}','{$contactno}','{$status}');";
	
$result = mysql_query($query,$link); 
if ($result) 
{ 
echo '<script>';
	echo 'alert("Your Request is Recieved ");';
	echo 'window.location="index.php";';
	 
	echo '</script>';}
	else{
		echo "failed"  ;
} 
 mysql_close($link);
//header("location:request_sent.php"); 
				
?>	