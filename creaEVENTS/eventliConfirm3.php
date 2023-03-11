<?php
	session_start();
	$_SESSION['eventType']="Hi-Tech";
	header('Location: lieux.php');
?>