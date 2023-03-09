<?php
	session_start();
	$_SESSION['eventLieu']="Centre Culturel Francais";
	header('Location: newevent.php');
?>