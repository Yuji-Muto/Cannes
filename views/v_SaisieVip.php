 
 <?php require_once(PATH_VIEWS.'header.php');?>
 
 <a href="index.php?page=accueil">
	<input id="B_retour" type="button" name="Retour" value="Accueil"/></a>
	
 <div id="oui" >
 <form method="POST">
	<label for="nom">Nom</label> 
	<input type="text" name="NOMVIP" id="NOMVIP" />
	<br>
	<label for="prenom">Prénom</label>  
	<input type="text" name="PRENOMVIP" id="PRENOMVIP" />
	<br>
	<label for="metier">Métier</label> 
	<input type="text" name="METIER" id="METIER" />
	<br> 
	<label for="datenaiss">Date de naissance</label> 
	<input id="DATEN" type="date" name="DATEN">
	<br>   
	<label for="nationalite">Nationalité</label>  
	<input type="text" name="NATIONALITE" id="NATIONALITE" />
	<br>  
	<label for="coeficient">Coeficient d'importance</label>   
	<select name="COEFIMPORT" id="COEFIMPORT">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="4">4</option>
		  <option value="5">5</option>
		  <option value="6">6</option>
		  <option value="7">7</option>
		  <option value="8">8</option>
		  <option value="9">9</option>
		  <option value="10">10</option>
	</select> 
	<br>
	<button type="submit">Ajouter</button>
	   
</form>
</div>

<?php require_once(PATH_VIEWS.'footer.php'); 