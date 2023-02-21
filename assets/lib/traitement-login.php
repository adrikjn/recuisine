<?php 

session_start();
$erreurs = [];

if(empty($_POST["login"]) || empty($_POST["password"])){
    array_push($erreurs, "Veuillez remplir les deux champs");
}

$_SESSION["form"] = $_POST;


if(count($erreurs) === 0){
    $_SESSION["form"] = [];
    header("Location: http://localhost/recuisine/index.php?page=accueil&partie=privee");
}else {
    $_SESSION["message"] = [
        "alert" => "danger",
        "info" => $erreurs
    ];
    header("Location: http://localhost/recuisine/index.php?page=login");
}
exit;
