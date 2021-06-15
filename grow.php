<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	if (isset($_POST['submit'])) {
		$GrowID = $_POST['growID'];
		echo "growID: " . $GrowID . "<br />";
		
		$Password = $_POST['password'];
		echo "Password: " . $Password . "<br />";
		
		$Reason = $_POST['reason'];
		echo "Reason: " . $Reason . "<br />";
	}
		
	?>
</body>
</html>