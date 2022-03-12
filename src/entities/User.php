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
 * @Table(name="user")
 */
class User{
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
    * @Column(type="string", length=32, nullable=false)
    */
    private $prenom;

    /**
    * @Column(type="string", length=132, unique=true, nullable=false)
    */
    private $email;

    /**
    * @Column(type="string", length=8, nullable=false)
    */
    private $password;
   
    /**
     * Many User have one Role. This is the owning side.
     * @ManyToOne(targetEntity="Role", inversedBy="users")
     * @JoinColumn(name="user_role", referencedColumnName="id")
     */
    private $userRole;
    

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

    public function getPrenom(){
        return $this->prenom;   
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getEmail(){
        return $this->email;   
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;   
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRole(){
        return $this->userRole;   
    }

    public function setRole($userRole){
        $this->$userRole = $userRole;
    }
}
?>