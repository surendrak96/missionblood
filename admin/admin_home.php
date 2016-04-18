<?php
session_start();
$user=$_SESSION['user'];


if(!isset($user))
	{
		
		echo "<script>alert('Session Expired Please Login'); window.location='index.php';</script>";

	}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blood Bank Admin Panel</title>
  <link rel="stylesheet" href="css/style_admin.css">

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script src="js/slides.min.jquery.js"></script>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background:url(images/bg.png) repeat;">
 <div style="position: absolute; top: 20px; right: 20px; width: 300px; text-align:right;">
  
<a href="logout.php"><i class="large material-icons">power_settings_new</i>
     <span style="position: relative;color: #771F8D;font-weight: 700;font-style: normal;font-size: 30px;
			padding: 0px 0px 5px 0px;text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">WELCOME 
			<?php echo $user;?></span>
			
		</div>
	<div id="header-wrap">
		<header class="group">
			<h2>
			<div id="call" >
				
				<span style="position: relative;color:red;font-weight: 700;font-style: normal;font-size: 48px;
			text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Blood Bank Admin Panel</span>
				
			</div><!-- end call --></h2>
			 
			<p></p>
			

		</header>
	</div><!-- end header wrap -->
	
<div id="container">
	
	
	<span style="position: relative;color: #771F8D;font-weight: 700;font-style: normal;font-size: 30px;
			padding: 0px 0px 5px 0px;text-shadow: 0px 1px 1px rgba(255,255,255,0.8);">Blood Bank</span>
      <p> &nbsp;  </p>
	  
	
<div id="option" align="right">
 <ul>
   
    <li><a href="show_details.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:32px;">Show Details</span></a></li><br/>
    <li><a href="search.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:32px;">Search Donor</span></a></li> <br/>
	<li><a href="blood_request.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:32px;">Blood Request</span></a></li> <br/>
	<li><a href="events.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:32px;">Events</span></a></li><br>
	<li><a href="logout.php"><img src="images/option.png" width="30" align="left"/><span style="line-height:32px;">Logout</span></a></li>	
				
</ul>
</div>
		
</div> <!--! end container -->
	
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>
<p> &nbsp;  </p>



	

	
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: true,	
			});
		});
</script>

</body>
</html>