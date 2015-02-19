<?php 
	if(isset($_GET['name'])){
		if($_GET['name']=='admin'){
			echo "Admin Page";
			echo "Roll No : ".$_GET["roll"];
			echo "City : ".$_GET["city"];
		}else if($_GET['name']=='user'){
			echo "user Page";
			echo "Roll No : ".$_GET["roll"];
			echo "City : ".$_GET["city"];
		}
	}else{
			header("location: get.php?name=user");
		}

		
		
?>
<a href="get.php?name=admin&roll=123&city=asr">Admin</a>
<a href="get.php?name=user&roll=1244&city=jal">User</a>