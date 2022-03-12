<?php
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="secteur")
 */
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
     * Many Entreprise have one Secteur. This is the owning side.
     * @ManyToOne(targetEntity="Entreprise", inversedBy="entreprises")
     * @JoinColumn(name="entrepriseId", referencedColumnName="id")
     */
    private $entreprise_id;
    
   
    public function __construct(){
        $this->entreprise_id = new ArrayCollection();
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
        return $this->entreprise_id;   
    }
   
    public function setEntreprise($entreprise){
        $this->entreprise_id = $entreprise;
    }
}

?>