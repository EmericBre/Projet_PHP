<?php

  class Article {
    private $ref; //référence unique du produit
    private $image; //image du produit
    private $titre; //nom du produit
    private $description; //texte descriptif
    private $caracteristiques; //caractéristiques
    private $prix; //prix du produit
    private $fabricant; //adresse du point de vente et nom de l'entreprise productrice
    private $dispo; //0 = non disponible 1 = en stock

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

    function getFabricant() : string {
      return $this->fabricant;
    }

    function getDispo() : int {
      return $this->dispo;
    }

  }

 ?>
