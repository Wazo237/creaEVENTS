<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=events','root', '');
}
catch (Exception $e)
{
	die('Erreur :' .$e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM membres WHERE (login =:log) AND (password =:pwd)');
$req->execute(array(
		'log'=>$_POST['login'],
		'pwd'=>$_POST['password']));
if( !($req->fetch()) ){
		echo '<script>alert("USERNAME et/ou Password invalides !!")</script>';
}else{
	$_SESSION['User']= $_POST['login'];
	$_SESSION['Userpwd'] = $_POST['password'];
	$_SESSION['is_logged_in'] = true;
	header('Location: portail.php');	
}	
?>