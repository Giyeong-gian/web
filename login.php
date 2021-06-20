<?php

	function check_val(str) {
		
	}

	$id = $_POST["id"];
	$password = $_POST["pw"];
	
	if ($id == "elizabeth" && $pw == "1234") {
		header("Location:CI/");
	}
	else {
		echo "<script>alert('Try again please.');</script>";
		header("Location:index.html");		
	}
	
	exit;	
	
?>
