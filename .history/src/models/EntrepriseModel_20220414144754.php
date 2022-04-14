<?php
    class EntrepriseModel{
        public function new($nom, $ninea, $secteur,$regime, $site, $dateC)
        {
            $entreprise = new Entreprise();
            $entreprise->setNom($nom)
                       ->setNinea($ninea)
                       ->setSecteur($secteur)
                       ->setDateCreation($dateC)
                       ->setRegimeJ($regime)
                       ->setCotisationS($regime)
                       ->setQuartier($quarier)
                       ->setPageWeb($site);
        }
    }
?>