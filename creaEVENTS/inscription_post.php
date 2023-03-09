<?php
try
{
	$bdd = new PDO('mysql:host=localhost; dbname=events', 'root', '');
}
catch(Exception $e)
{
	die('Erreur :' .$e->getMessage());
}

if( isset($_POST['service'])){
	$choix=$_POST['service'];
	switch ($choix) {
		case '1':
			$travail="Eleve/Etudiant";
			break;
		case '2':
			$travail="Sans emploi";
			break;
		case '3':
			$travail="Salarie du public";
			break;
		case '4':
			$travail="Salarie du prive";
			break;
		case '5':
			$travail="Entrepreuneur";
			break;
		case '6':
			$travail="Personnage publique/religieux";
			break;
		default:
			$travail="pas encore connu";
			break;
	}
}
if ($_POST['password2']==$_POST['password']){
	$req = $bdd->prepare('INSERT INTO membres(Noms, Prenoms, CNI, profession, login, password) VALUES(:nm, :prnm, :cni, :sav, :psd, :mssg)');
$req->execute(array(
	'nm'=>$_POST['Noms'],
	'prnm'=>$_POST['Prenoms'],
	'cni'=>$_POST['cni'],
	'sav'=>$travail,
	'psd'=>$_POST['login'],
	'mssg'=>$_POST['password2']
));
header('Location: acceuil.php');
}else{
	echo '<script>alert("Les deux mots de passe ne sont pas identiques!!!!")</script>';
}

?>