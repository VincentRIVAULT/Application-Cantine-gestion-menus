<?php

 
    $entree = $_POST['entree'];
    $plat_principal = $_POST['plat_principal'];
    $dessert = $_POST['dessert'];

    var_dump($_POST);

    $requete = $connexion->prepare("INSERT INTO `menu`
    (`id`, `entree`, `plat_principal`, `dessert`)
    VALUES (NULL, :entree, :plat_principal, :dessert)");
    
    $requete->bindParam(':entree', $entree); 
    $requete->bindParam(':plat_principal', $plat_principal); 
    $requete->bindParam(':dessert', $dessert);  
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    // header('location:index.php?table=user');

    // header('location:index.php?table=user');