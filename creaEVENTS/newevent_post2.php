<?php
	session_start();
	$_SESSION['eventLibelle'] = $_POST['Libelle'];
	$_SESSION['eventDate'] = $_POST['date'];
	$_SESSION['eventPrice'] = $_POST['prix'];
	$_SESSION['eventLieu'] = $_POST['Lieu'];
	header('Location: eventValidator6.php');
?>