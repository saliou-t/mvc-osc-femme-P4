<?php
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

            $manager
        }

        public function edit($id){

        }
    }
?>