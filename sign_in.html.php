<?php
	//start the session before html tag
	session_start();
	include("config.php");

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		// username and password sent from form 
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
      	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      	$sql = "SELECT userid, userType FROM `user_t` WHERE username = '$myusername' and password = '$mypassword'";
      	$result = mysqli_query($db,$sql);
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	
      	$count = mysqli_num_rows($result);
      	$privilege = $row['userType'];

      	// one and only one row matches the login info
      	if($count ==1){
      		
      		$_SESSION['login_user'] = $myusername;
      		
      		if ($privilege == "administrator"){
      			header("Location: administrator/index.php");
      			exit();
      		} else {
      			header("location: welcome.php");
      			exit();
      		}
      	} else {
      		$error = "Your Login Name or Password is invalid";
      	}

	}
?>