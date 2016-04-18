<?php session_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
 
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
} 


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


 

<script type="text/javascript">
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}


 function onlyNumbers(event) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
        return true;
    }

</script>
<style>
#f1 {
	display:none;
	}
#f2
{display:none;}
</style>

<script>
function showform()
{
	var selopt=document.getElementById("district").value;



		 if(selopt=='East Godavari')
	{
		    document.getElementById("f1").style.display="block";
		    document.getElementById("f2").style.display="none";
		   

	}
	else
		if(selopt=='West Godavari'){
			
			document.getElementById("f2").style.display="block";
            document.getElementById("f1").style.display="none";
		
		} }

 window.onload = function(){
    document.getElementById('East Godavari').selectedIndex = -1;
  }
</script>
	<style>
.contact_form {
	width:20px;
}
	</style>
<script type="text/javascript" src="js/jsDatePick.min.1.3.js">
</script>
 <script>
window.onload = function()
	{
		new JsDatePick({useMode:2,target:"dob",dateFormat:"%y-%m-%d"});	

	};</script>
	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />

 
  </script>
</head>
<body >
<div >
	 
<?php 
include('includes/header.php');
?>
		</div> 
			<main class="mdl-layout__content">
   
          <div class="page-content">
          	<center>
    	
    <h2>Donor Register</h2>
 <div style="width:100%;" class="dive" id="dive">
           
        	 <div class="mdl-layout-spacer"></div>
     
             <div id="contact_form">
        
                <h4><span style="color:#ED1B24">* </span>Enter your Details</h4> <br/>
				
				<span style="font-size:16px;color:red;">* All fields are mandatory</span> <br/><br/>				

				
                <form method="post" name="register" id="register" action="process_register.php" onsubmit="return validateForm();" enctype="multipart/form-data">
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

					<label class="mdl-textfield__label" for="fullname">Full Name:</label> 
					<input type="text" id="fullname" name="fullname" class="mdl-textfield__input" required />
				</div>
					 <div class="mdl-layout-spacer"></div>
     



					<label for="email">Gender:</label>
					<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-male">
                    <input type="radio" id="option-male" class="mdl-radio__button" name="gender" value="male" checked>
                 <span class="mdl-radio__label">Male</span>
                 </label>
                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-female">
  <input type="radio" id="option-female" class="mdl-radio__button" name="gender" value="female">
  <span class="mdl-radio__label">Female</span>
</label>			 
		            <div class="mdl-layout-spacer"></div>
     

                 <!--   <label for="email">Date of Birth:</label> 
					<input type="date" name="dob" id="dob" value="' . date('d-m-y') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div>		-->
					

								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="fullname">Date of Birth:</label> 
					<input   class="mdl-textfield__input"    name="dob" /></div>
					 <div class="mdl-layout-spacer"></div>
     
										
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">	
                <h6 style="color:#ED1B24"> Blood Group</h6>
					<select id="bloodgroup" name="bloodgroup" class="mdl-textfield__input" required>
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
					 <div class="mdl-layout-spacer"></div>
     
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="mobilenumber">Contact Number:</label>
                   
					<input type="text" class="mdl-textfield__input " name="mobilenumber" id="mobilenumber" onkeypress="return onlyNumbers(event);" maxlength="15"  />	</div>			               
				 <div class="mdl-layout-spacer"></div>
     
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="mobilenumber">Email:</label>
                   <input type="email" class="mdl-textfield__input " name="email" id="email"  /></div>
					 <div class="mdl-layout-spacer"></div>
     
				
<!--			    <label for="subject">Username:</label> 
					<input type="text" class="validate-subject required input_field" name="username" id="username" required/>				               
					<div class="cleaner h10"></div>  -->
					
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="mobilenumber">Password:</label><input type="password" class="mdl-textfield__input " name="password" id="password"  /> 	</div>
					 <div class="mdl-layout-spacer"></div>
     
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="mobilenumber">Confirm Password:</label> 
					<input type="password" class="mdl-textfield__input" name="confirmpassword" id="confirmpassword"  /> 	</div>
					 <div class="mdl-layout-spacer"></div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					
					<label class="mdl-textfield__label" for="weight">Weight in KG:</label> 
					<input type="text" class="mdl-textfield__input" name="weight" id="weight" onkeypress="return onlyNumbers(event);" maxlength="3"></input>  
					</div>
					 <div class="mdl-layout-spacer"></div>
     
				<!--	<label for="email">Last Donated:</label> 
					<input type="date" name="last_donated" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div> -->
					 <div class="mdl-layout-spacer"></div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					<label class="mdl-textfield__label" for="last_donated">Last Donated:</label>
					<input class="mdl-textfield__input" type="text" size="12" id="last_donated" name="last_donated"  />
					 	</div>
					 <div class="mdl-layout-spacer"></div>
     
					
					
					
					
					
					 <div class="mdl-layout-spacer"></div>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	              
					
					  <h6 style="color:#ED1B24"> District</h6>
				
					<select class="mdl-textfield__input" required="required" id="district" name="district"   onchange="showform()" >
					  <option value="0">Select</option>
					<option value="East Godavari"> East Godavari </option>
					<option value="West Godavari"> West Godavari </option>
				
					</select>
					 	</div>
					 <div class="mdl-layout-spacer"></div>
     
					
					

					<div  id="f1" >
					<label>Mandal<span>*</span></label>
					<select  name="mandal"  >
					  <option>Select Mandal</option>
					  <option value="Anaparthi">Anap</option>
					   <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					 
					 
					 
				     </select>
					</div>


	

					<div  id="f2" >
					<label>Mandal<span>*</span></label>
					<select  name="mandal"  >
					  <option>Select Mandal</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					  <option value="Anaparthi">Anap</option>
					 
					 
					 
					 </select>
					</div>

					<div ></div>
					
					<label for="subject">Residence Number:</label> 
					2ext" class="validate-subject required input_field" name="residencenumber" id="residencenumber" required/>				               
					<div ></div>
					
					<label for="text">Address:</label> 
					<textarea id="text" name="address" id="address" rows="0" cols="0" class="required"></textarea>
					<div ></div>
					
<!--				<label for="text">Message:</label> 
					<input type="text" class="validate-subject required input_field" name="message" id="message" required/>	
					<div class="cleaner h10"></div>
					
					<label for="subject">Community:</label> 
					<input type="text" class="validate-subject required input_field" name="community" id="community" required/>				               
					<div class="cleaner h10"></div>  -->
					
					
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
										
				</form>
 

             </div>
			 </div>
             
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