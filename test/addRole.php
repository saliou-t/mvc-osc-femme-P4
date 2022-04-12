<?php
 require_once "../bootstrap.php";
    
 
    $role = new RoleModel();
    $role->setNom('ROLE_USER');
    $entityManager->persist($role);
    $entityManager->flush();

    echo $role->getId();

?>