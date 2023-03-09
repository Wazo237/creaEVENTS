<?php
	session_start();
	$_SESSION['eventLieu']="Stade Ahmadou Ahidjo";
	header('Location: newevent.php');
?>