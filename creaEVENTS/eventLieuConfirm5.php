<?php
	session_start();
	$_SESSION['eventLieu']="Musee National";
	header('Location: newevent.php');
?>