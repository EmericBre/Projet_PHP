<?php

  class Categorie {
    private $ref; //référence unique de la catégorie
    private $nom; //nom de la catégorie
    private $pere; //catégorie père
    private $fille; //présence d'une catégorie fille ou non

    //getters
    function getRef() : int {
      return $this->ref;
    }

    function getNom() : string {
      return $this->nom;
    }

    function getPere() : string {
      return $this->pere;
    }

    function getFille() : int {
      return $this->fille;
    }
  }

 ?>
