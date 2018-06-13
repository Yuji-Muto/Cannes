<?php require_once(PATH_VIEWS.'accueil.php'); ?>

<?php

if(isset($_POST['submit']))
{
	header('Location: index.php?page=SaisieVip');
}