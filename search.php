<?php session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>
 


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

<body  >
 	 
    	<div>
<?php 
include('includes/header.php');
?></div>
	
    	<main class="mdl-layout__content">
    <div class="page-content">
    
    	<center>
    	
      <h2 style="margin-top:40px">Enter Details and Click</h2>
        <div class="col_w630 float_l">
        	
             <div id="search_form">
        
               <form method="post" name="search" id="search" action="process_search" enctype="multipart/form-data">
				
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	
					
					<h6 style="color:#ED1B24">Select Blood Group</h6>
					<select id="bloodgroup" name="bloodgroup"class="mdl-textfield__input"  required>
					<option value="" selected="selected">--Select--</option>
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
					<div class="cleaner h10"></div><br/>
					
					
					
					
					<h6 style="color:#ED1B24">Select Gender</h6>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	
                  <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-male">
                    <input type="radio" id="option-male" class="mdl-radio__button" name="gender" value="male" checked>
                 <span class="mdl-radio__label">Male</span>
                 </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-female">
  <input type="radio" id="option-female" class="mdl-radio__button" name="gender" value="female">
  <span class="mdl-radio__label">Female</span>
</label>			 <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	</div>
					<h6 style="color:#ED1B24">Select District </h6>
			
					<select id="district" name="district" class="mdl-textfield__input"  required>
					<option value="" selected="selected">--Select--</option>
					<option value="East Godavari">East Godavari</option>
					<option value="West Godavari">West Godavari </option>
				
					</select>
					 </div><br>
					<style="align:center"><input type="submit" value="Search" id="submit" name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"" /></style>
					
										
				</form>
 

             </div>
			 </div>
             
  
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->
 
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