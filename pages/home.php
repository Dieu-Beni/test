<div class="m-5">
    <a href="index.php?page=add" class="btn text-white" style="background-color: #3f51b5;">+ Nouvelle tâche</a>
</div>

<?php foreach($tasks as $t){?>
    <div class="card mt-2">
    <div class="card-header">
        <?= "Tâche ".$t[0] ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $t[1] ?></h5>
        <p class="card-text"><?= $t[2] ?></p>
        <p class="card-text"><?= $t[4] ?></p>
        <p class="card-text">Etat: <?= $t[3] ?></p>
        <?php if($t[3] == 0){?>
        <a href="../devoir/functions/valid_func.php?id=<?= $t[0] ?>" style="background-color: #3f51b5;" class="btn text-white">Valider</a>
        <?php } ?>
        <a href="index.php?page=edit&id=<?=$t[0]?>" class="btn btn-warning">Modifier</a>
        <a href="../devoir/functions/delete_func.php?id=<?= $t[0] ?>" class="btn btn-danger">Supprimer</a>
    </div>
    </div>
<?php } ?>