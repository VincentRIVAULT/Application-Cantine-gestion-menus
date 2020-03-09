<?php

 
    $nom_plat = $_POST['nom'];
    $photo = $_POST['photo'];
    $type = $_POST['type'];

    var_dump($_POST);

    $requete = $connexion->prepare("INSERT INTO `plat`
    (`id`, `nom`, `photo`, `type`)
    VALUES (NULL, :nom_plat, :photo, :type)");
    
    $requete->bindParam(':nom_plat', $nom_plat); 
    $requete->bindParam(':photo', $photo); 
    $requete->bindParam(':type', $type);  
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    // header('location:index.php?table=user');

    // header('location:index.php?table=user');