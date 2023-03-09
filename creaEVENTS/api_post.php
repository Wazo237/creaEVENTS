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

	$req2 = $bdd->prepare('UPDATE evenements 
							SET Feespaid = true 
							WHERE(IDevent =:nm)');
	$req2->execute(array(
		'nm'=>$eventID
	));
	header('Location: about_test.php');
	

	

?>