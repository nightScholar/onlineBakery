<?php
	session_start();

	if(session_destroy()){
		header("location: ../sign_in.html.php");
	}
	?>