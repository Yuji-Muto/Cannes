 
 <?php require_once(PATH_VIEWS.'header.php');?>
 
 <a href="index.php?page=accueil">
	<input id="B_retour" type="button" name="Retour" value="Accueil"/></a>
	
 <div id="oui" >
 <form>
	<label for="nom">Nom</label>  <input type="text" name="nom" id="nom" />
	<br>
	<label for="prenom">Prénom</label>  <input type="text" name="prenom" id="prenom" />
	<br>
	<label for="metier">Métier</label>  <input type="text" name="metier" id="metier" />
	<br> 
	<label for="datenaiss">Date de naissance</label> 
	<input id="date" type="date">
	<br>   
	<label for="nationalite">Nationalité</label>  <input type="email" name="nationalite" id="nationalite" />
	<br>   
	<label for="coeficient">Coeficient d'importance</label>   
	<select name="coef">
		  <option value="coef">1</option>
		  <option value="coef">2</option>
		  <option value="coef">3</option>
		  <option value="coef">4</option>
		  <option value="coef">5</option>
		  <option value="coef">6</option>
		  <option value="coef">7</option>
		  <option value="coef">8</option>
		  <option value="coef">9</option>
		  <option value="coef">10</option>
	</select> 
	<br>
	<button type="submit">Ajouter</button>
	   
</form>
</div>

<?php require_once(PATH_VIEWS.'footer.php'); 