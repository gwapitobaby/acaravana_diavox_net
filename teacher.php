<?php 
	session_start();

	if(!isset($_SESSION['username']) || $_SESSION['role']!="teacher"){

		header("Location:index.php");
	}
	?>
	<h1>hello : <?=$_SESSION['username']?></h1>
	<h2>You are a : <?= $_SESSION['role']?></h2>
	<a href="logout.php">Logout</a>