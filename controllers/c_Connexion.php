<?php require_once(PATH_VIEWS.'Connexion.php');?>

<?php 

 if(isset($_SESSION['logged']))
 {
	 $_SESSION = array();
 }
 
if(isset($_POST['id'])&& isset($_POST['passwd']))
{
	$identif = $_POST['id'];
	$passW = $_POST['passwd'];
	
	if($identif == login && $passW == mdp)
	{
		$_SESSION['logged'] = true;
		header('Location: index.php?page=accueil');
		exit();
	}
	else if($identif != login){
		
	}
	else{
		
	}
}

require_once(PATH_VIEWS.'Connexion.php');
