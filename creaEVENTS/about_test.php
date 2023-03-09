<?php
	session_start();
	if ($_SESSION['is_logged_in']==true){
			header('Location: portail.php');	
	}else{
			header('Location: acceuil.php');	
	}
?>