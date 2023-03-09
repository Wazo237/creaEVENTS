<?php
	session_start();
	$_SESSION['eventLieu']="PAPOSY";
	header('Location: newevent.php');
?>