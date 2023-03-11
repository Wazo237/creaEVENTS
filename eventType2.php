<?php
	session_start();
	$_SESSION['eventType']="Rassemblement";
	header('Location: lieux.php');
?>