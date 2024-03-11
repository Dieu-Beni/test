<?php
    //session_start();
?>
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home">Mon Gestionnaire des tâches</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(!isset($_SESSION["name"])){?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="index.php?page=login">Connexion</a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="nav-link btn btn-light" href="index.php?page=register">Inscription</a>
                    </li>
                    <?php }else{ ?>
                    <li class="nav-item ml-3">
                        <a class="nav-link btn btn-light" href="../devoir/functions/logout.php"><?= $_SESSION["name"] ?> | Se déconnecter</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>