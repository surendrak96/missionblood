<?php
session_start();
$id=$_GET['id'];
echo "hii";
echo $id;

$con=mysql_connect("localhost","root","1234") or die("error to connect");
mysql_select_db("bloodbank",$con) or die("could not connect to db ");
$sql=  " SELECT *FROM blood_request where `request_id`=$id " ;

$result=mysql_query($sql,$con) or die("wrong query");;

while(($row = mysql_fetch_array($result)))
      {
			//echo '<tr><td><span style="font-size:15px">'.$total.')</td></span>';
			echo '<td><span style="font-size:15px;">'.$row['request_id'].'</span> </td><br>';
		echo '<td><span style="font-size:15px;">Patient Name'.$row['request_patientname'].'</span> </td><br>';
		echo '<td><span style="font-size:15px;">Hospital :'.$row['request_hospital'].'</span> </td><br>';
		echo '<td><span style="font-size:15px;">District'.$row['request_district'].'</span> </td><br>';
			echo '<td style="align:center">
			<a href="process_user_delete.php?id='.$row['request_id'].'">
			<input type="button" style="width:75px;margin-top:3px;background-color:white;border:1px solid rgba(201, 33, 60, 0.62);" value="Delete" name="user_delete" id="user_delete" /></a>
			</td></tr>';
		//	$total=$total+1; 
		}


?>
+ Options
 Full texts	
request_id
request_patientname
request_patientdoctor
request_hospital
request_place
request_district
request_email
request_requiredon
request_bloodgroup
request_contactperson
request_contactno