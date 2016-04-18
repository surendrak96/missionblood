<?php

?>

<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/material.min.css">
<script src="js/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

	<!-- Main HTML -->
	
<body>
	
	 
    
   	<main class="mdl-layout__content">
    <div class="page-content">
<center>
		<form action="<?php echo $_SELF ?>" method="post" name="login">
		
	<div class="mdl-textfield mdl-js-textfield">
<textarea class="mdl-textfield__input" type="text" rows="1" id="tittle"></textarea>
  <label class="mdl-textfield__label" for="tittle">Enter Tittle</label>
</div>
<br>
	
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<textarea style="width:300px;" class="mdl-textfield__input" type="text" rows="4" id="tittle"></textarea>
  <label class="mdl-textfield__label" for="tittle">Enter  Event Description</label>
</div><br>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<textarea style="width:300px;" class="mdl-textfield__input" type="text" rows="4" id="ttittle"></textarea>
  <label class="mdl-textfield__label" for="ttittle">Enter  Event Description</label>
</div><br>

		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>