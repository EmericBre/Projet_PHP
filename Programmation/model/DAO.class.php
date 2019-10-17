<?php

require_once("../model/Categorie.classe.php");
require_once("../model/Produit.class.php");

// Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/db/bricomachin.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO('sqlite:../data/db/bricomachin.db');
          }
          catch (PDOException $e){
            die("erreur de connexion:".$e->getMessage());
          }

        }

        // Accès à toutes les catégories
        // Retourne une table d'objets de type Categorie
        function getAllCat() : array {
          $m="SELECT * FROM categorie";
          $sth = $this->db->query($m);
          $resultat = $sth->fetchAll(PDO::FETCH_CLASS, "Categorie");
          return $resultat;
        }

?>
