<?php
require_once('../inclusions/header.php');?>
<div class="row  col-10 offset-1">
    <span class="h2">Liste des entreprises </span>
    <span class="offset">
        <a href="index.php?view=new" class="btn btn-outline-success text-black">Ajouter</a>
    </span>
</div>

<div class="row  col-10 offset-1">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Régime</th>
                <th>Siege Sociale</th>
                <th>Régistre de commerce</th>
                <th>Date de Création</th>
                <th>NINEA</th>
                <th>Page web</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($entreprise as $item) { ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nom'] ?></td>
                    <td><?= $item['regime'] ?></td>
                    <td><?= $item['sociale'] ?></td>
                    <td><?= $item['registre'] ?></td>
                    <td><?= $item['dateCreation'] ?></td>
                    <td><?= $item['ninea'] ?></td>
                    <td><?= $item['web'] ?></td>

                    <td>
                        <a href="index.php?view=modification&id=<?= $entreprise['id'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="index.php?view=supprimer&id=<?= $entreprise['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                <?php } ?>

                </tr>
        </tbody>
    </table>
</div>