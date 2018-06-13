 
 <?php require_once(PATH_VIEWS.'header.php');?>
 
 <form>
	<label for="nom">Nom</label>  <input type="text" name="nom" id="nom" />
	<br>
	<label for="prenom">Prénom</label>  <input type="text" name="prenom" id="prenom" />
	<br>
	<label for="metier">Métier</label>  <input type="email" name="metier" id="metier" />
	<br> 
	<label for="datenaiss">Date de naissance</label>  <input type="email" name="datenaiss" id="datenaiss" />
	<br>   
	<label for="nationalite">Nationalité</label>  <input type="email" name="nationalite" id="nationalite" />
	<br>   
	<label for="coeficient">Coeficient d'importance</label>  <input type="number" min="1" max="10" step="1" name="coeficient" id="coeficient" />
	<br>
	<button type="submit">Ajouter</button>
	   
</form>

<?php require_once(PATH_VIEWS.'footer.php'); 