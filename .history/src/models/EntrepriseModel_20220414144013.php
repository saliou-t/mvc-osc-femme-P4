<?php
    class EntrepriseModel{
        public function new()
        {
            $entreprise = new Entreprise();
            $entreprise->setNom($nom);
            $entreprise->setNinea($ninea);
            $entreprise->setSecteur($secteur);
            $entreprise->setDateCreation($date);
            $entreprise->getRegimeJ($date);
        }
            
    }
?>