<?php session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

  

 
  
</head>

<body  >
     
        <div  >
<?php 
include('includes/header.php');
?></div>
    
        <main class="mdl-layout__content">
    <div class="page-content">
    
    	

    	<h2>Contact Information</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h4>Send us a message...</h4>
                
                <form method="post" name="contact" action="process_contact.php">
					
					<label for="author">Name:</label> <input type="text" id="name" name="name" class="required input_field" />
					<div class="cleaner h10"></div>
																	
					<label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
					<div class="cleaner h10"></div>
															
					<label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
					<div class="cleaner h10"></div>
											
					<label for="text">Message:</label> <textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
					<div class="cleaner h10"></div>				
																
					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
										
				</form>
        
            </div> 
        </div>
        
        <div class="col_w300 float_r">
            <div class="col_fw">	
            	<h4>Mailing <a title="imagens vetoriais grátis from pt.mystockvector.com"  href="http://pt.mystockvector.com"  class="col_allw300_title" target="_blank">Address</a></h4>
                <h6><strong>sedrftghjbhvcgdxtfghbv cfghjbmhvcghhv</strong></h6>
                
           <br />
				<h6><strong>Contact Numbers:</strong></h6>
				<strong>Phone:</strong>+91 <br />
                <strong>Email:</strong> <a href="mailto:info@blood.com">info@surendrareddy.com</a>
            </div>            
            <div class="col_fw_last">
                <h4>Our Location</h4>
                <div id="map"><a class="pirobox" href="images/map_big.jpg" title="Our Location"><img src="images/map_thumb.jpg" alt="Our Location" /></a></div>                
            </div>
        </div>

        <div class="cleaner"></div>
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