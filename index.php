<?php session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donations</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">



 
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
 

<script type="text/javascript" src="js/jquery.min.js"></script>


<!-- Center the image -->
<style scoped>
.item img{
    margin: 0 auto;
}

.dive { 
  float: left; 
  width: 300px; 
  margin-right: 30px;
margin-left: 60px;
}
  .img{
width: 300px; 
  height: 135px; 
  } 
main.mdl-layout__content {
    width: 100%;
}

</style>
 
  
</head>
<body>

<?php 
include('includes/header.php');
?>
	<main class="mdl-layout__content">
    <div class="page-content">
    
<!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
</ol>

<!-- Content -->
<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="item active">
<img src="1.png" alt="Sunset over beach">
</div>

<!-- Slide 2 -->
<div class="item">
<img src="1.png" alt="Rob Roy Glacier">
</div>

<!-- Slide 3 -->
<div class="item">
<img src="1.png" alt="Longtail boats at Phi Phi">
</div>

</div>

<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span class="icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span class="icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>

 
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    
	 

  <br><br>

   <div>
        
       <div class="dive" id="dive">
      <div>
            	<h3>Latest Blood Request</h3> 
       <marquee height="200px" scrollamount="2" direction="up" onmouseover="this.stop();" onmouseout="this.start();">

<?php

    
		$link=mysql_connect("localhost","root","1234")or die("can not linkect");
        mysql_select_db("bloodbank",$link) or die("can not select database");
						
		$query = "SELECT * FROM blood_request where request_status='OPEN'  ORDER BY request_requiredon ASC"; //LIMIT $offset,$rec_limit "; 
		$result = mysql_query($query,$link) or die("wrong query");
	$i=0;
		while(($row = mysql_fetch_array($result)) && $i<60)
      {
						
			echo'
			<div class="news_box">
            <a href="viewrequest?id='.$row['request_id'].'">Name of Patient:'.$row['request_patientname'].'</a>
            <p>Hospital:'.$row['request_hospital'].'<br/>
			Bloodgroup Required:'.$row['request_bloodgroup'].'<br/>
			<Required On:'.$row['request_requiredon'].'<br/>
			Contact No:'.$row['request_contactno'].' </p>
            </div>
		   ';
		   $i=$i+1;
		 }                
?>    </marquee >

               </div>  
               </div>
          
         <!--       <a class="more" href="#">More</a> -->
     <div class="dive" id="dive">
         
            	<h3>Facts about blood needs</h3>
                <div class="img"><span></span><img src="images/banner1.jpg" alt="Image 01" /></div> 
            <!--<p><em>Morbi nec varius mauris. Nam dapibus sapien eget eros cursus id tincidunt massa congue.</em></p>
            
			
			<p><li align="justify">Every year our nation requires about 4 Crore units of blood, out of which only a meager 40 Lakh units of blood are available.</li></p>
            <li align="justify">The gift of blood is the gift of life. There is no substitute for human blood.</li></p>
           <p><li align="justify"> Every two seconds someone needs blood.</li></p>
            <p><li align="justify">More than 38,000 blood donations are needed every day.</li></p>
           <p><li align="justify"> A total of 30 million blood components are transfused each year.</li></p>
           <p><li align="justify"> The average red blood cell transfusion is approximately 3 pints.</li></p>
            <p><li align="justify"> The blood type most often requested by hospitals is Type O.</li></p>
           <p><li align="justify"> Sickle cell patients can require frequent blood transfusions throughout their lives.</li></p>
           <p><li align="justify"> More than 1 million new people are diagnosed with cancer each year. Many of them will need blood, sometimes daily, during their chemotherapy treatment.</li></p>
           <p><li align="justify"> A single car accident victim can require as many as 100 units of blood.</li></p>-->
		   
		   <p align="justify"></p>
<!--		   <div class="fb-like-box" data-href="http://www.facebook.com/Blooddonorskerala" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
			
		-->	
			
			 </div>
             <div class="dive" id="dive"> 
             
            	<h3>Advantages of Donation</h3>
                <div class="img" ><span></span><img src="images/banner2.jpg" alt="Image 02" /></div>
             
              
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