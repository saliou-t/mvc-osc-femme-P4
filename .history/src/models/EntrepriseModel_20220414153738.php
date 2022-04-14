<?php
// use Doctrine\ORM\EntityManager;
require "/home/zall/Bureau/SIMPLON/osc_femmes/libs/system/Model.php";

require_once "../libs/system/model.php";
    class EntrepriseModel extends Model{
        public function new($nom, $ninea, $secteur,$regime, $site, $dateC, $cotisation, $quartier)
        {
            $entreprise = new Entreprise();
            $entreprise->setNom($nom)
                       ->setNinea($ninea)
                       ->setSecteur($secteur)
                       ->setDateCreation($dateC)
                       ->setRegimeJ($regime)
                       ->setCotisationS($cotisation)
                       ->setQuartier($quarier)
                       ->setPageWeb($site); 
                       
            $entityManager->persist($entreprise);
            $entityManager->flush();
        }

        public function edit($id){
            $entreprise = $entityManager->find($id);

            $entityManager->remove($entreprise);
            flush
        }

        public function delete($id){

        }
    }
?>