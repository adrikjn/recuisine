<?php
session_start(); // formulaire = je prépare le terrain
// Faire le front à la fin.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header / Redirection link -->
    <header class="bg-dark">
        <nav class="navbar navbar-expand container navbar-dark flex-wrap">
            <span class="navbar-brand">KitchenFood <small>EatGood, GetGood </small></span>
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=recette">Recette</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=accueil&partie=privee" class="nav-link">TdB</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="container">

    <!-- Rooting partie Public -->

    <?php if(empty($_GET)) : ?>
        <?php require "assets/views/public/accueil.php" ?>
    
    <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "recette") : ?>
        <?php require "assets/views/public/recette.php"?>
    
        <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "login") : ?>
        <?php require "assets/views/public/login.php" ?>

    <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "contact") : ?>
        <?php require "assets/views/public/contact.php" ?>

    <?php elseif(!empty($_GET["page"]) && $_GET["page"] === "mention") : ?>
        <?php require"assets/views/public/mentions-legales.php" ?>

    
    <!-- Rooting partie Privée -->

    <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && $_GET["partie"] === "privee") : ?>
        <?php require "assets/views/private/profil.php" ?>

    <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && $_GET["partie"] === "privee") : ?>
        <?php require "assets/views/private/gestionpage.php" ?>

    <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && $_GET["partie"] === "privee") : ?>
        <?php require "assets/views/private/gestionrecette.php" ?>

    <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && $_GET["partie"] === "privee") : ?>
        <?php require "assets/views/private/commentaire.php" ?>

    <?php elseif(!empty($_GET["page"]) && !empty($_GET["partie"]) && $_GET["page"] === "accueil" && $_GET["partie"] === "privee")  : ?>
        <?php require "assets/views/private/users.php"  ?>


    <?php else : ?>
        <?php require "assets/views/public/404.php" ?>
    <?php endif ?>



    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>