<?php

require_once("Categorie.class.php");
require_once("Produit.class.php");

// Le Data Access Object
    // Il représente la base de donnée
    class DAO {
        // L'objet local PDO de la base de donnée
        private $db;
        // Le type, le chemin et le nom de la base de donnée
        private $database = 'sqlite:../data/produitsmilitaires.db';

        // Constructeur chargé d'ouvrir la BD
        function __construct() {
          try {
            $this->db = new PDO('sqlite:../data/produitsmilitaires.db');
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

        function getSubCat(int $cat) : array {
          $m="SELECT * FROM categorie WHERE pere LIKE '$cat'";
          $sth = $this->db->query($m);
          $resultat = $sth->fetchAll(PDO::FETCH_CLASS, "Categorie");
          return $resultat;
        }

        function getArticles(int $cat) : array {
          $m="SELECT * FROM article WHERE categorie LIKE = '$cat'";
          $sth = $this->db->query($m);
          $resultat = $sth->fetchAll(PDO::FETCH_CLASS, "Article");
          return $resultat;
        }

        function getAllProduit() : array {
          $m="SELECT * FROM article";
          $sth = $this->db->query($m);
          $resultat = $sth->fetchAll(PDO::FETCH_CLASS, "Produit");
          return $resultat;
        }

        function getArticle(int $cat, int $id) : produit {
          $m="SELECT * FROM article WHERE categorie LIKE = '$cat.%' AND ";
          $sth = $this->db->query($m);
          $resultat = $sth->fetchAll(PDO::FETCH_CLASS, "Produit");
          return $resultat;
        }
    }

?>
