<?php session_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>
 
 <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
  
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />

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
 <script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
 <script>
window.onload = function()
	{
		new JsDatePick({useMode:2,target:"on",dateFormat:"%d-%m-%y"});	
	};
 
  </script>
 <style>
.dive { 
  float: center; 
  width: 100%; 
   
}



 </style>
</head> 
<body >

    
 
	
   
     
 <?php 
include('includes/header.php');
?>





    
    
   	<main class="mdl-layout__content">
    <div class="page-content">
<center>
    	
      <h2>Post Blood Request</h2>
        <div style="width:100%;" class="dive" id="dive">
        	
             
        
            <h4><span style="color:#ED1B24">* </span>Kindly fill this request form and click submit</h4> <br/>
  
				
    <form   method="post" name="request" id="request" action="process_blood_request.php" enctype="multipart/form-data">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input type="text" id="patientname" name="patientname" class="mdl-textfield__input"  />
         <label class="mdl-textfield__label" for="patientname">Patient's Name:</label> 
				
				 
			 </div>
			 <br>

 

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<input  class="mdl-textfield__input" type="text" name="hospital" id="hospital"  ></input><label  class="mdl-textfield__label" for="hospital">Hospital:</label> 
  </div>  <br>

				 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					 	 
					
					<label  class="mdl-textfield__label" for="place">Place:</label> 
					<input type="text" class="mdl-textfield__input" name="place" id="place" />				               
					
					
					  
			 </div><br>
				 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					 	 
					<label class="mdl-textfield__label"  for="district">District:</label> 
					<input type="text"class="mdl-textfield__input"  name="district" id="district" />				               
					 </div><br>
					
					 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<label class="mdl-textfield__label" for="email"data-error="wrong" data-success="right">Email</label> 
					<input type="text" class="mdl-textfield__input"  name="email" id="email" />				               
					</div>
					
					
				<!--	<label for="email"> On:</label> 
					<input type="date" name="on" id="on" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/ class="validate-email  input_field" >
					<div class="cleaner h10"></div> -->
						<br>
					 
	
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	
					<h6 style="color:#ED1B24"> Required on</h6>
					 
<input placeholder=" Required on yy-mm-dd"class="mdl-textfield__input" name="on" type="text" id="on"  readonly/>

</div><br>
    

	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	
					<h6 style="color:#ED1B24"> Blood Group</h6>
					<select id="bloodgroup" name="bloodgroup"
					class="mdl-textfield__input"  >
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
									

					 

						 <br>
	 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					 	 

					<label class="mdl-textfield__label" for="contactperson">Contact Person Name:</label> 
					<input type="text"  class="mdl-textfield__input" name="contactperson" id="contactperson" />				               
					</div><br>
					
					

 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		
					<label class="mdl-textfield__label" for="subject">Contact Number:</label> 
					<input pattern="[0-9]*" class="mdl-textfield__input"type="text"   name="contactno" id="contactno"   />	 <span style="margin-bottom:10px" class="mdl-textfield__error">Enter a valid  number!</span>			               
					</div>  <br>

			<button style="margin-right:40px;"class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="Reset"id="Reset" name="Reset">Reset
    <i class="material-icons left">replay</i>
  </button> 
			 							
					
					
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit"id="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
				</div>	
										
				</form>
 

             </div>
			  
             
  </div></main>
 </center>



<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">BloodBank</div>
    <ul class="mdl-mini-footer__link-list">
      <li>  Copyright ©2016 
        <a href="#">blood</a></li>
      <li><a href="http://www.surendrareddy.com" rel="nofollow" target="_parent">Designed by Surendra Reddy</a>
</li>
    </ul>
  </div>
</footer>

</body>
</html>