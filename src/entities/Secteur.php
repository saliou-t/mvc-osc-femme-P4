<?php

class Secteur{
     /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
    * @Column(type="string", length=32, nullable=false)
    */
    private $nom;

    /**
    * @Column(type="text",  nullable=true)
    */
    private $libelle;

    /**
    * @OneToMany(targetEntity="Entreprise", mappedBy="id")
    */
    private $entreprise;
    
   
    public function __construct(){
        
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

    public function getLibelle(){
        return $this->libelle;   
    }
   
    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function getEntreprise(){
        return $this->entreprise;   
    }
   
    public function setEntreprise($entreprise){
        $this->entreprise = $entreprise;
    }

}

?>