<?php
//session_start();
?>	


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>



<script type="text/javascript">

function validateForm()
{

if(document.register.password.value != document.register.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.register.confirmpassword.focus();     
return false;
} 

}

  
</script>  
  <style>
  #footer {
   /* position:fixed; */
    bottom:0;
    width:100%;
    height:100px;
}</style>
</head>
<?php 
include('includes/header.php');
?>
  
      <main class="mdl-layout__content">
    <div class="page-content">
    
  	 
<div  align="center">





<?php

if(empty($_POST))
 {
 exit();
 }
 $bloodgroup=$_POST['bloodgroup'];
 $gender=$_POST['gender'];
 $district=$_POST['district'];
 
$link=mysql_connect("localhost","root","1234")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "select user_id,user_fullname,user_gender,user_bloodgroup,user_mobilenumber from user where
(user_bloodgroup='$bloodgroup' and user_district='$district' and user_gender='$gender')";
$result = mysql_query($query,$link);
if($result)
{






    if(mysql_affected_rows($link)!=0)
	{
	
echo '

<table class="mdl-data-table mdl-js-data-table">
  <thead>
    
<tr>
         <th class="mdl-data-table__cell--non-numeric">Donor Name</th>
         <th class="mdl-data-table__cell--non-numeric">Blood Group</th>
         <th class="mdl-data-table__cell--non-numeric">Gender</th>
		     <th class="mdl-data-table__cell--non-numeric">Contact Number</th>
	      <th class="mdl-data-table__cell--non-numeric">More Details</th>
</tr>
</thead>
';		
while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
{            
		echo '<tbody><tr ><td class="mdl-data-table__cell--non-numeric">'.$row['user_fullname'].'</td>';
		echo '<td class="mdl-data-table__cell--non-numeric">'.$row['user_bloodgroup'].'  </td>';
	    echo '<td class="mdl-data-table__cell--non-numeric">'.$row['user_gender'].' </td>';
	    echo '<td class="mdl-data-table__cell--non-numeric">'.$row['user_mobilenumber'].' </td>';		   
        echo '<td class="mdl-data-table__cell--non-numeric"><a href="user_details?id='.$row['user_id'].'"><u>More</u></a> </td></tr/></tbody>';		          
		}
}

else 
echo "No Results to display";
}
?>


</table>


</div><!-- end of wrapper -->



</div>
         
 
  </main>


<div>
<div id="footer">

<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">BloodBank</div>
    <ul class="mdl-mini-footer__link-list">
      <li>  Copyright © 2016 
        <a href="#">blood</a></li>
      <li><a href="http://www.surendrareddy.com" rel="nofollow" target="_parent">Designed by Surendra Reddy</a>
</li>
    </ul>
  </div>
</footer>
</div>
</body>
</html>