<?php 

session_start();
if(isset($_SESSION['user']))
{
/*$dbc = @mysqli_connect('localhost','root','root','domainpool');
//if (!$dbc) { trigger_error('Could not connect to MySQL: ' . mysqli_connect_error()); }
//$id=$_SESSION['user_id'];
//$query = "select user_fname from user where user_id=$id ";     
//$result = mysqli_query($dbc,$query);
//if($result)
//{    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  {		  $name=$row['user_fname'];
		  }
}
*/
$name=$_SESSION['fullname'];
$id=$_SESSION['user_id'];

//mysql_close($dbc);
	}

?>


<html><head>
<link rel="stylesheet" href="css/material.min.css">
<script src="js/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body >

    
   <!-- end of top -->

	
   
     
 


<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title
      <span class="mdl-layout-title">Blood Bank</span> -->
         
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="./">Home</a>
        <a class="mdl-navigation__link" href="blood_request">Blood Request</a>
        <a class="mdl-navigation__link" href="search">Search</a>
        <a class="mdl-navigation__link" href="register">Register</a>
        <a class="mdl-navigation__link" href="events">Events</a>
        <a class="mdl-navigation__link" href="contact">Contact</a>
        <a class="mdl-navigation__link" href="about_blood">About Blood</a>
      </nav>
      <div >
<?php 
if((!isset($_SESSION['user']) ) )
    {  
  echo '  
  <form action="process_login" method="post" name="login" id="login">
    <input style="color: #000;"type="text" placeholder="Email ID" name="username" size="18" id="username" title="Username"   />
    <input type="password" placeholder="Password" name="password" size="18" id="password" title="Password"  />

    <button type="submit" name="search" value="" alt="Search" id="search"  
    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Login
</button>
   
    </form>
  ';  } 
  else 
  
    {
      echo '<center><a style="color:white " href="myaccount"><h7><b> View Profile</b></h7></a> 
  
<a style="margin-left:20px; color:#fff" href="logout"><b> <u>Logout</b></u></a> </center> 
   '; }  ?>

    </div> 
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <!--<span class="mdl-layout-title">WELCOME <?php echo $name?></span> -->
    <nav class="mdl-navigation">
       <a class="mdl-navigation__link" href="./">Home</a>
        <a class="mdl-navigation__link" href="blood_request">Blood Request</a>
        <a class="mdl-navigation__link" href="search">Search</a>
        <a class="mdl-navigation__link" href="register">Register</a>
          <a class="mdl-navigation__link" href="events">Events</a>
        <a class="mdl-navigation__link" href="contact">Contact</a>
        <a class="mdl-navigation__link" href="about_blood">About Blood</a>
    </nav>
  </div>

</div>

<br><br><br>
</body></html>


