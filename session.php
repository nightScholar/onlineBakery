<?php 
	include('config.php');
	session_start();
	
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($db,"select username from user_t where username = '$user_check' ");
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_session = $row['username'];
	if(!isset($login_session)){
		header("location: sign_in.html.php");
		
	} else {
		echo "Your session is running: ".$login_session;
	}
?>
