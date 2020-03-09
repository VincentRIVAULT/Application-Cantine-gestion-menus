<?php

    $plat_id = $_POST['id'];

    $nom_plat = $_POST['nom'];
    $type = $_POST['type'];

    var_dump($_POST);

    $requete = $connexion->prepare("UPDATE `plat`
    SET `nom`= :nom_plat, `type` = :type
    WHERE id = :plat_id");
    
    $requete->bindParam(':nom_plat', $nom_plat); 
    $requete->bindParam(':type', $type); 
    $requete->bindParam(':plat_id', $plat_id);   
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    // header('location:index.php?table=user');

    // header('location:index.php?table=user');