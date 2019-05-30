<?php
	/*
	cette classe modele permet d'acceder à la BDD avce différentes méthodes :
	connexion, select, delete, update etc.
	*/

	class Modele_boutique
	{
		private $pdo; //instance de la classe PDO

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			$this->pdo = null;
			try{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
			}
			catch(Exception $exp){
				echo "Erreur de la connexion à la BDD ! ";
			}
		}

		public function afficher_produit(){
	 		$requete="select p.idcategorie, p.description, p.categorie, p.prix, c.libelle
	 			from Produit p, categorie c
	 			where p.idcategorie = c.idcategorie;";

	 		if($this->pdo == null){
				return null;
			} else {
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$afficher_produit = $select->fetchAll();
				return $afficher_produit;
			}
	 	}

	 	public function modifier_produit($idproduit, $description, $categorie, $prix, $libelle){
	 		$requete="update produit SET description = :description, 
	 									categorie = :categorie, 
	 									prix = :prix, 
	 									libelle = :libelle

	 									WHERE idproduit = :idproduit;";
	 		$donnees = array(":idproduit"=>$idproduit, ":description"=>$description, 
	 						":categorie"=>$categorie, ":prix"=>$prix, ":libelle"=>$libelle);
	 		if($this->pdo == null){
				return null;
			} else {
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				$infos = $select->fetch();
				return $infos;
			}
	 	}

	 	public function nb_produits(){
	 		$requete="select * from nb_produits;";

	 		if($this->pdo == null){
				return null;
			} else {
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$nb_produits = $select->fetchAll();
				return $nb_produits;
			}
	 	}
	 }
?>