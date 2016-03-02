<?php 
	
	include('config/config.php');

	if (!isset($_SESSION['user'])) {
		$content= "content/studentsystem.php";
		include("templates/master1.php");
	}else{
		header('Location: logged.php');
	}

 ?>