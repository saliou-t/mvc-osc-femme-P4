<?php
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\FloatType;
use Doctrine\DBAL\Types\IntergerType;

/**
 * @Entity
 * @Table(name="quartier")
 */
class Quartier{

     /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", nullable=false)
     */
    private $nom;

    /**
     * @Column(type="text",  nullable=true)
     */
    private $libelle;

    /**
     * One Quartier has many Entreprises. This is the inverse side.
     * @OneToMany(targetEntity="Entreprise", mappedBy="entreprise_id")
     */
    private $entreprises;


    public function __construct()
    {
        $this->entreprises = new ArrayCollection();
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
        $this->entreprises = $entreprise;
    }
}

?>