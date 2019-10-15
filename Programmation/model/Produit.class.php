<?php

  class Article {
    private $ref; //référence unique du produit
    private $image; //image du produit
    private $titre; //nom du produit
    private $description; //texte descriptif
    private $caracteristiques; //caractéristiques
    private $prix; //prix du produit

    //getters
    function getRef() : int {
        return $this->ref;
    }

    function getImage() : string {
        return $this->image;
    }

    function getTitre() : string {
        return $this->titre;
    }

    function getDescription() : string {
        return $this->description;
    }

    function getCaractéristiques() : string {
        return $this->caracteristiques;
    }

    function getPrix() : float {
        return $this->prix;

    }

  }

 ?>
