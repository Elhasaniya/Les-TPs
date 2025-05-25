<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $dateNaissance = htmlspecialchars($_POST['annee']);
    $ID = htmlspecialchars($_POST['ide']);
    $password = htmlspecialchars($_POST['pass']);
    if($_POST['sexe'] =='F'){
        $mot = "debutante";
    }

    else{
        $mot = "debutant";
    }
    echo"<h2>Bonjour!</h2> <strong>$nom $prenom</strong> votre date de naissance est <strong>$dateNaissance</strong> votre id:<strong>$ID</strong> ,votre password:<strong>$password</strong> et vous etes $mot";

}