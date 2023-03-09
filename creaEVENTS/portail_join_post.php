<?php
	session_start();
		$_SESSION['eventID']=$_POST['idevent'];
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=events', 'root', '');
}
catch (Exception $e)
{
	die('Erreur :' .$e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM evenements WHERE (IDevent =:log)');
$req->execute(array(
		'log'=>$_SESSION['eventID']));

while ($donnees = $req->fetch()){
	$_SESSION['eventLibelle'] = $donnees['Libelle'];
	$_SESSION['eventType'] = $donnees['type'];
	$_SESSION['eventLieu'] = $donnees['Lieu'];
	$_SESSION['eventDate'] = $donnees['Periode'];
	$_SESSION['eventPrice'] = $donnees['Prixticket'];
}
$req->closeCursor();
	$choix=$_SESSION['eventLieu'];
	switch ($choix) {
		case 'PAPOSY':
			header('Location: eventChecker1.php');
			break;
		case 'Canal Olympia':
			header('Location: eventChecker2.php');
			break;
		case 'Centre Culturel Francais':
			header('Location: eventChecker3.php');
			break;
		case 'Stade Ahmadou Ahidjo':
			header('Location: eventChecker4.php');
			break;
		case 'Musee National':
			header('Location: eventChecker5.php');
			break;
		default:
			header('Location: eventChecker6.php');
			break;
	}
?>