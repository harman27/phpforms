<?php 
	if(isset($_POST['options'])){
		/*echo $_POST["username"];
		echo $_POST["password"];
		echo $_POST["gender"];
		echo $_POST["options"];
		echo $_POST['message'];
		*/
		//print_r($_POST['options']);
		/*foreach($_POST['options'] as $op){
			echo $op.'<br>';
		}*/
		echo implode(",",$_POST['options']);
	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form method="post">
		<!--
		<input type="text" name="username">
		<input type="password" name="password">
		<input type="radio" name="gender" value="m">male
		<input type="radio" name="gender" value="f">female
		<br>
		<select name="options">
			<option value="op1">opt 1</option>
			<option value="op2">opt 2</option>
		</select><br>
		<textarea name="message"></textarea>
		-->
		<input type="checkbox" name="options[]" value="op1">opt1
		<input type="checkbox" name="options[]" value="op2">opt2
		<input type="checkbox" name="options[]" value="op3">opt3
		<input type="checkbox" name="options[]" value="op4">opt4
		<input type="submit">
	</form>
</body>
</html>