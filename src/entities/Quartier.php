<?php

class Quartier{
    private $id;
    private $nom;
    private $libelle;
    private $entreprises;

    public function __construct()
    {
        
    }

    public function getId(){
        return $this->id;   
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;   
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getlibelle(){
        return $this->libelle;   
    }
   
    public function setlibelle($libelle){
        $this->libelle = $libelle;
    }

    public function getEntreprises(){
        return $this->entreprises;   
    }
   
    public function setEntreprise($entreprise){
        $this->entreprise = $entreprise;
    }
}

?>