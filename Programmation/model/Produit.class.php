<?php

  class Produit {
    private $ref; //référence unique du produit
    private $categorie; //numéro de la catégorie du produit
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

    function getCategorie() : int {
      return $this->categorie;
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

    function getDispo() : string {
      return $this->dispo;
    }

    // Le constructeur peut être appelé par la Base de Données (BD)
    function __construct(string $ref=NULL,string $titre=NULL,float $prix=NULL) {

      // Les autres paramètres ont une valeur nulle, et il ne faut pas modifier les valeurs données par la BD
      if (isset($ref)) {
        // Si ref est renseignés alors toutes les autres valeurs doivent l'être
        $this->ref = $ref;
        $this->titre = $titre;
        $this->prix = $prix;
      }

      // Ces valeurs doivent être renseignées
      assert(isset($this->ref));
      assert(isset($this->titre));
      assert(isset($this->prix));

      // Ces valeurs doivent être strictement positives
      assert($this->prix > 0);

  }
}
 ?>
