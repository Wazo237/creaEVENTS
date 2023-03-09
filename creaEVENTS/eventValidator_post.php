<?php
session_start();
$eventLibelle = $_SESSION['eventLibelle'];
$eventPrice = $_SESSION['eventPrice'];
$User = $_SESSION['User'];
$eventLieu = $_SESSION['eventLieu'];
$eventDate = $_SESSION['eventDate'];
$eventType = $_SESSION['eventType'];

try
{
	$bdd = new PDO('mysql:host=localhost; dbname=events', 'root', '');
}
catch (Exception $e)
{
	die('Erreur :' .$e->getMessage());
}
$req = $bdd->prepare('SELECT IDmember FROM membres WHERE (login =:log)');
$req->execute(array(
		'log'=>$_SESSION['User']));

while ($donnees = $req->fetch()){
	$idMem = $donnees['IDmember'];
}
$req->closeCursor();
	$req2 = $bdd->prepare('INSERT INTO evenements(Libelle, Prixticket, Createur, IDmember, Lieu, Periode, type) VALUES(:nm, :prnm, :cni, :id, :psd, :mssg, :ttp)');
	$req2->execute(array(
		'nm'=>$eventLibelle,
		'prnm'=>$eventPrice,
		'cni'=>$User,
		'id'=>$idMem,
		'psd'=>$eventLieu,
		'mssg'=>$eventDate,
		'ttp'=>$eventType
	));
	header('Location: preapi.php');
	

	

?>