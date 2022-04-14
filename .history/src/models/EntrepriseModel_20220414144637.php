<?php
    class EntrepriseModel{
        public function new($nom, $ninea, $secteur,$regime, $site)
        {
            $entreprise = new Entreprise();
            $entreprise->setNom($nom)
                       ->setNinea($ninea)
                       ->setSecteur($secteur)
                       ->setDateCreation($date)
                       ->setRegimeJ($regime)
                       ->setCotisationS($regime)
                       ->setQuartier($quarier)
                       ->setPageWeb($site);
        }
            
    }
?>