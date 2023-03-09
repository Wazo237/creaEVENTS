<?php
	session_start();
	$_SESSION['eventLieu']="Canal Olympia";
	header('Location: newevent.php');
?>