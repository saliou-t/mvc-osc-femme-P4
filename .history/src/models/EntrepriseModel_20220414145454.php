<?php

require_once "../libs/system/model.php";
    class EntrepriseModel{
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
                       
            $entityManager->persist($newUser);
            $entityManager->flush();
        }

        public function edit($id){

        }
    }
?>