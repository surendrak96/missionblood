 <?php 
session_start();
$id=$_SESSION['user_id'];

 
if(!isset($id))
  {
    
    echo "<script>alert('Session Expired Please Login Again'); window.location='./';</script>";

  }
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

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

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
  
</head>

<body>
	<?php 
include('includes/header.php');
?>
		</div>  
			<main class="mdl-layout__content">
   
          <div class="page-content">
          	<center>
<h2>Welcome <?php echo $name ?></h2>
<a style="color:#000 ;margin-bottom:40px;"; 
href='editprofile' >Edit Profile</a>

<table width="100%" border="0" cellspacing="0" cellpadding="0">


<?php

$id=$_SESSION['user_id'];
 
$link=mysql_connect("localhost","root","1234")or die("can not connect");
mysql_select_db("bloodbank",$link) or die("can not select database");
 
$query = "select * from user where user_id='$id' ";
$result = mysql_query($query,$link);
if($result)
{ 
    if(mysql_affected_rows($link)!=0)
	{
         while($row = mysql_fetch_array($result,MYSQLI_ASSOC))
		{            
				
echo ' <table class="mdl-data-table mdl-js-data-table">
  <tbody>
    <tr>
    <th  class="mdl-data-table__cell--non-numeric" width="27%" bgcolor="#e9e8e8" style="padding:7px;">Full Name</td>
    <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;">'.$row['user_fullname'].'
  </tr>  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Gender</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_gender'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Date of Birth</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_dob'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Blood Group</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_bloodgroup'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Mobile Number</td>
    <td class="mdl-data-table__cell--non-numeric"  style="padding:7px;">'.$row['user_mobilenumber'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Email</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_email'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Weight</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_weight'].'Kg</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Last Donated</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_lastdonated'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">District</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_district'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Mandal</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_mandal'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Residence Number</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_residencenumber'].'</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Address</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_address'].'</td>
  </tr>
  
  
<!--  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Message</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_message'].'</td>
  </tr>
  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Community</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">'.$row['user_community'].'</td>
  </tr> -->
  ';		
		}
    }	
else 
echo "No Results ";
}

?>


</table>

 </div>
			 
          	</div>
         
 
  </main>

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

 
</body>
</html>