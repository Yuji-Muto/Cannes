 <?php require_once(PATH_VIEWS.'header.php');?>
 
 <a href="index.php?page=accueil">
	<input id="B_retour" type="button" name="Retour" value="Accueil"/></a>
	
 <table style="width:100%">
   <tr>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Métier</th>
	   <th>Date de<br> naissaince</th>
       <th>Nationalité</th>
       <th>Coeficient<br> d'importance</th>
   </tr>
   <tr>
   <?php
       foreach($tableau as $personne)
            {
            ?>
                <tr>
                    <td><?php echo $personne[0];?></td>
                    <td><?php echo $personne[1];?></td>
                    <td><?php echo $personne[2];?></td>
                    <td><?php echo $personne[3];?></td>
                    <td><?php echo $personne[4];?></td>
                    <td><?php echo $personne[5];?></td>
                </tr>
            <?php
            }
			?>
   </tr>
 
</table>
 

 <?php require_once(PATH_VIEWS.'footer.php'); 