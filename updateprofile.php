 <?php 
session_start();
$id=$_SESSION['user_id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgroup'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$weight=$_POST['weight'];
$ldonated=$_POST['ldonated'];
$district=$_POST['district'];
$mandal=$_POST['mandal'];
$rnumber=$_POST['rnumber'];
$address=$_POST['address'];
 



$con=mysql_connect("localhost","root","1234") or die("unable to connect");
mysql_select_db("bloodbank",$con) or die("unable to select db");
$sql=" UPDATE user SET 
user_fullname='$name' , 
user_gender='$gender' ,
user_dob='$dob', 
user_bloodgroup='$bloodgroup', 
user_mobilenumber='$mobile',
user_email='$email',
user_weight='$weight', 
user_lastdonated='$ldonated', 
user_district='$district',
user_mandal='$mandal', 
user_residencenumber='$rnumber',
user_address='$address'  where user_id =$id";
$query=mysql_query($sql,$con);
if($query){
  echo '<script>';
  echo 'alert("Update successfully !");';
  echo 'window.location="myaccount";';
   
  echo '</script>';
}
else{
  echo "fail";
}



 ?>