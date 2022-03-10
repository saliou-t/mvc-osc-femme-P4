<?php

class Entreprise{
    private $id;
    private $nom;
    private $dateCreation;
    private $regimeJ;
    private $registreC;
    private $latitude;
    private $longitude;
    private $ninea;
    private $contraF;
    private $nombreEmployer;
    private $cotisationS;
    private $pageWeb;
    private $quatier;

    /**
    * @ManyToOne(targetEntity="Entreprise", mappedBy="id")
    */
    private $secteur;

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

    public function getDateCreation(){
        return $this->dateCreation;   
    }
   
    public function setDateCreation($date){
        $this->dateCreation = $date;
    }

    public function getRegimeJ(){
        return $this->regimeJ;   
    }

    public function setRegimeJ($regimeJ){
        $this->regimeJ = $regimeJ;
    }

    public function getRegistreC(){
        return $this->registreC;   
    }

    public function setRegistreC($registre){
        $this->registreC = $registre;
    }

    public function getNinea(){
        return $this->ninea;   
    }

    public function setNinea($role){
        $this->ninea = $role;
    }
   
    public function getLatitude(){
        return $this->latitude;   
    }

    public function setLatitude($latitude){
        $this->latitude = $latitude;
    }

    public function getLongitude(){
        return $this->longitude;   
    }

    public function setLongitude($longitude){
        $this->longitude = $longitude;
    }

    public function getContratF(){
        return $this->contraF;   
    }

    public function setContratF($contratF){
        $this->contraF = $contratF;
    }

    public function getNombreE(){
        return $this->nombreEmployer;   
    }

    public function setNombreE($nombre){
        $this->nombreEmployer = $nombre;
    }

    public function getCosisationS(){
        return $this->cotisationS;   
    }

    public function setCotisationS($cotisationS){
        $this->cotisationS = $cotisationS;
    }

    public function getPageWeb(){
        return $this->pageWeb;   
    }

    public function setPageWeb($page){
        $this->pageWeb = $page;
    }

    public function getQuartier(){
        return $this->quatier;   
    }

    public function setQuartier($quartier){
        $this->quartier = $quartier;
    }
}

?>