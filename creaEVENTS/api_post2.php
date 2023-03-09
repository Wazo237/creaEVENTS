<?php
session_start();
$eventID = $_SESSION['eventID'];

try
{
	$bdd = new PDO('mysql:host=localhost; dbname=events', 'root', '');
}
catch (Exception $e)
{
	die('Erreur :' .$e->getMessage());
}

$req = $bdd->prepare('SELECT IDmember FROM membres WHERE (login =:log) AND (password =:pss)');
$req->execute(array(
		'log'=>$_SESSION['User'],
		'pss'=>$_SESSION['Userpwd']
	));

while ($donnees = $req->fetch()){
	$_SESSION['memberID'] = $donnees['IDmember'];
}
$req->closeCursor();
	
$req2 = $bdd->prepare('INSERT INTO tickets(event, IDevent, acheteur, IDmember) 
							VALUES(:ev, :idev, :ach, :idmb)');
	$req2->execute(array(
		'ev'=>$_SESSION['eventLibelle'],
		'idev'=>$eventID,
		'ach'=>$_SESSION['User'],
		'idmb'=>$_SESSION['memberID']
	));
	header('Location: about_test.php');
	

	

?>