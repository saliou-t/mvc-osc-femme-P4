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

    /**
    * @Column(type="text", nullable=false)
    */
    private $libelle;

    /**
     * One Role has many Users. This is the inverse side.
     * @OneToMany(targetEntity="User", mappedBy="userRole")
     */
    private $users;
    

    public function __construct()
    {
        $this->users = new ArrayCollection();
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

    public function setUser($user){
        $this->users = $user;
    }
}

?>