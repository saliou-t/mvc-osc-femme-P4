<?php
use Doctrine\ORM\Annotation as ORM;
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
     * @ManyToMany(targetEntity="Role", mappedBy="id")
    */
    private $role;
    

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
        return $this->role;   
    }

    public function setRole($role){
        $this->$role = $role;
    }
}
?>