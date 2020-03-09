<?php


    $menu_id = $_POST['id'];

    $entree = $_POST['entree'];
    $plat_principal = $_POST['plat_principal'];
    $dessert = $_POST['dessert'];

    var_dump($_POST);

    $requete = $connexion->prepare("UPDATE `menu`
    SET `entree`= :entree, `plat_principal` = :plat_principal, `dessert` = :dessert
    WHERE id = :id");
    
    $requete->bindParam(':entree', $entree); 
    $requete->bindParam(':plat_principal', $plat_principal); 
    $requete->bindParam(':dessert', $dessert);  
    $requete->bindParam(':id', $menu_id); 
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    // header('location:index.php?table=user');

    // header('location:index.php?table=user');