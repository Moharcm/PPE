<div class="banniere">
<h3>Boutique</h3>
</div>

<center>
<div class='col-md-6'>
	<table class="table table-striped table-dark">
		
		<tr><td>Description</td><td>Libelle</td><td>Prix(€)</td><td>Catégorie</td><td></td></tr>

		<?php

		foreach($afficher_produit as $unproduit){
			echo"
				<tr>
					<td>".$unproduit['description']."</td>
					<td>".$unproduit['categorie']."</td>
					<td>".$unproduit['prix']."</td>
					<td>".$unproduit['libelle']."</td>
					<td><a href='index.php?page=2&action=X&idcategorie=".$unproduit['idcategorie']."'><img src = 'medias/70757-delete-bin.png' width='50' height='50'></a>
	 				<a href='index.php?page=2&action=E&idcategorie=".$unproduit['idcategorie']."'><img src = 'medias/17443.png' width='50' height='50'></a>
	 				</td>
				</tr>
				";
			}
		?>
	</table>
</div>
</center>
<br><br><br>
<h2>Ajouter/Modifier un produit</h3>
<div class="integrationProduit">
<center>
	<form method ="post">
		<table>
			<tr><td><h3>Description</h3></td><td><input type="text" name="descriptionProduit" placeholder="Description"></td></tr>
			<tr><td><h3>Libelle</h3></td><td><input type="text" name="libelleProduit" placeholder="Libelle"></td></tr>
			<tr><td><h3>Prix(€)</h3></td><td><input type="text" name="prixPorduit" placeholder="Prix(€)"></td></tr>
			<tr><td><h3>Categorie</h3></td><td><input type="text" name="categorieProduit" placeholder="Categorie"></td></tr>
			<tr><td><center><input type="submit" name="ajouterProduit" value="Ajouter"></center></td></tr>
			<tr><td><center><input type="submit" name="modifierProduit" value="Modifier"></center></td></tr>
		</table>
	</form>
</center>
</div>