<?php
	session_start();
	$_SESSION['eventLibelle']=$_POST['Libelle'];
	$_SESSION['eventDate']=$_POST['date'];
	$_SESSION['eventPrice']=$_POST['prix'];
	$choix=$_SESSION['eventLieu'];
	switch ($choix) {
		case 'PAPOSY':
			header('Location: eventValidator1.php');
			break;
		case 'Canal Olympia':
			header('Location: eventValidator2.php');
			break;
		case 'Centre Culturel Francais':
			header('Location: eventValidator3.php');
			break;
		case 'Stade Ahmadou Ahidjo':
			header('Location: eventValidator4.php');
			break;
		case 'Musee National':
			header('Location: eventValidator5.php');
			break;
		default:
			echo '<script>alert("Erreur lors de la prise en charge du lieu creaEVENTS !!!!")</script>';
			break;
	}
?>