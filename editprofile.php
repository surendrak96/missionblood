 <?php 
session_start();
$id=$_SESSION['user_id'];
$name=$_SESSION['name'];


if(!isset($id))
  {
    
    echo "<script>alert('Session Expired Please Login Again'); window.location='index.php';</script>";

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
  
  
</script>  
 <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
 <script>
window.onload = function()
  {
 new JsDatePick({useMode:2,target:"dob" ,dateFormat:"%d-%m-%y"}); 

       
  };
 
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
href='myaccount'>Back to my account</a>

<table width="100%" border="0" cellspacing="0" cellpadding="0">


<?php
 
 
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
        
echo '<form action="updateprofile" method="POST" >  <table class="mdl-data-table mdl-js-data-table" >
  <tbody>
    <tr>
    <td  class="mdl-data-table__cell--non-numeric" width="27%" bgcolor="#e9e8e8" style="padding:7px;">Full Name</td>
    <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
<input value='.$row['user_fullname'].' class="mdl-textfield__input" type="text" name="name" id="name"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Gender</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-male">
                    <input type="radio" id="option-male" class="mdl-radio__button" name="gender" value="male" checked>
                 <span class="mdl-radio__label">Male</span>
                 </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-female">
  <input type="radio" id="option-female" class="mdl-radio__button" name="gender" value="female" >
  <span class="mdl-radio__label" checked>Female</span>
</label></td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Date of Birth</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  
          
           
<input placeholder=" Required on dd-mm-yy"class="mdl-textfield__input" value= "'.$row['user_dob'].'"  name="dob" type="text" />
</td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Blood Group</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  
           
          <select  id="bloodgroup" name="bloodgroup"
          class="mdl-textfield__input"  >
          <option value="'.$row['user_bloodgroup'].'" selected="selected">'.$row['user_bloodgroup'].'</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+ ">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          </select>
          </div>
                  </td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric"  bgcolor="#e9e8e8" style="padding:7px;">Mobile Number</td>

  <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
<input value='.$row['user_mobilenumber'].' class="mdl-textfield__input" type="text" name="mobile" id="mobile"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Email</td>
   <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
<input value='.$row['user_email'].' class="mdl-textfield__input" type="text" name="email" id="email"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Weight</td>
    <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
<input value="'.$row['user_weight'].'" placeholder="KG" class="mdl-textfield__input" type="text" name="weight" id="weight"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>  
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Last Donated</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  
          
           
<input placeholder=" Required on dd-mm-yy"class="mdl-textfield__input" value="'.$row['user_lastdonated'].'"name="ldonated" type="text" />
</td>
  </tr>
     
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">District</td>
     <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
 <select  id="district" name="district"
          class="mdl-textfield__input"  >
          <option value="'.$row['user_district'].'" selected="selected">'.$row['user_district'].'</option>
          <option value="East Godavari">East Godavari</option>
          <option value="West Godavari">Wast Godavari</option>
            </select>
            </div></td>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Mandal</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;"> <div class="mdl-textfield mdl-js-textfield">
 <select  id="mandal" name="mandal"
          class="mdl-textfield__input"  >
          <option value="'.$row['user_mandal'].'" selected="selected">'.$row['user_mandal'].'</option>
          <option value="East Godavari">East Godavari</option>
          <option value="West Godavari">Wast Godavari</option>
            </select>
            </div></td></td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Residence Number</td>
    <td class="mdl-data-table__cell--non-numeric" width="73%"  style="padding:7px;"> 
      <div class="mdl-textfield mdl-js-textfield">
<input value='.$row['user_residencenumber'].' class="mdl-textfield__input" type="text" name="rnumber" id="rnumber"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>
  <tr>
    <td class="mdl-data-table__cell--non-numeric" bgcolor="#e9e8e8" style="padding:7px;">Address</td>
    <td class="mdl-data-table__cell--non-numeric" style="padding:7px;"> <div class="mdl-textfield mdl-js-textfield">
<input value='.$row['user_address'].'  rows="4"class="mdl-textfield__input" type="text" name="address" id="address"  ></input> 
<label class="mdl-textfield__label" </label>
  </div></td>
  </tr>  </table><div style="margin:20px;">
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"id="submit" name="submit">update profile
    <i class="material-icons right">send</i>
  </button>
 </div>
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

