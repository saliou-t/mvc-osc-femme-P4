<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity
 * @Table(name="role")
 */
class Role{
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
    private $libelle;
    private $users;
    

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

    public function getLibelle(){
        return $this->libelle;   
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }

    public function getUser(){
        return $this->users;   
    }

    public function setUser($users){
        $this->users = $users;
    }
}

?>