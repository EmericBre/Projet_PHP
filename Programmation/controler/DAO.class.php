<?php

  require_once('Produit.class.php');

  class DAO {
    private $db;

    // Ouverture de la base de donnée
    function __construct() {
      try {
        $this->db = new PDO('sqlite:data/data.db');
      }
      catch (PDOException $e){
        die("erreur de connexion:".$e->getMessage());
      }
    }

  // Methodes CRUD
  // Lecture d'un article de la base connaissant sa référence et la quantité demandée
  function read(string $ref) : Article {
    // Constuction de la requête
    $req = "SELECT * FROM produit WHERE ref='$ref'";

    $resultat = $this->db->query($req);
    $table = $resultat->fetchAll(PDO::FETCH_CLASS);
    $article = new Article($table[0]->ref, $table[0]->titre, $table[0]->prix);

    // Recupère la valeur, passe à l'article la quantité demandée
    $table=array($article);
    // Verification que l'objet a été trouvé
    if (count($table) == 1) {
      return $table[0];
    } elseif (count($table) == 0) {
      // Aucun ou plusieurs articles trouvés
      throw new Exception('Erreur dans '.__METHOD__."(): aucun Article trouvé pour la référence '$ref'");
    } else {
      throw new Exception('Erreur dans '.__METHOD__.": trop d'Articles trouvés sous la référence '$ref'");
    }
  }

}

?>
