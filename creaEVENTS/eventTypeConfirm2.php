<?php
	session_start();
	$_SESSION['eventType']="Musical";
	header('Location: lieux.php');
?>