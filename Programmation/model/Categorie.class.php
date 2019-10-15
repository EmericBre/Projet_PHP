<?php

  class Categorie {
    private $ref; //référence unique de la catégorie
    private $nom; //nom de la catégorie
    private $pere; //catégorie père

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
  }

 ?>
