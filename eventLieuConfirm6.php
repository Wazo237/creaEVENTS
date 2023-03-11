<?php
	session_start();
	$_SESSION['eventLieu']="Autres";
	header('Location: newevent2.php');
?>