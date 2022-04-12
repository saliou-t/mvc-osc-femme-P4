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
 * @Table(name="entreprise")
 */
class Entreprise{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
    * @Column(type="string", length=32, nullable=false, unique=true)
    */
    private $nom;

    /**
    * @Column(type="date", nullable=false)
    */
    private $dateCreation;

    /**
    * @Column(type="text", nullable=true)
    */
    private $regimeJ;

    /**
    * @Column(type="text", nullable=true)
    */
    private $registreC;

    /**
    * @Column(type="float", nullable=true)
    */
    private $latitude;

    /**
    * @Column(type="float", nullable=true)
    */
    private $longitude;

    /**
    * @Column(type="string", length=55, nullable=false, unique=true)
    */
    private $ninea;

    /**
    * @Column(type="text", nullable=true)
    */
    private $contraF;

    /**
    * @Column(type="integer", nullable=false)
    */
    private $nombreEmployer;

    /**
    * @Column(type="string", length=3, nullable=true)
    */
    private $cotisationS;

    /**
    * @Column(type="string", length=100, nullable=true)
    */
    private $pageWeb;
 
    /**
     * Many Quartier have one Entreprise. This is the owning side.
     * @ManyToOne(targetEntity="Quartier", inversedBy="quartier_id")
     * @JoinColumn(name="quartier_id", referencedColumnName="id")
     */

    private $quatier_id;

    /**
     * One Secteur has many Entreprises. This is the inverse side.
     * @OneToMany(targetEntity="Entreprise", mappedBy="entreprises")
     */
    private $secteurs;

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
        return $this->quatier_id;   
    }

    public function setQuartier($quartier){
        $this->quatier_id = $quartier;
    }

    public function getSecteur(){
        return $this->secteurs;   
    }

    public function setSecteur($secteurs){
        $this->secteurs = $secteurs;
    }
}

?>