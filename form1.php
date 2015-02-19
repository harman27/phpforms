<?php 
	if(isset($_GET['firstname'])){
		echo $_GET['firstname'];
	}else{
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="get">
		<input type="text" name="firstname">
		
		<input type="submit">
	</form>
</body>
</html>
 <?php } ?>