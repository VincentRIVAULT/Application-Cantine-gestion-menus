<?php


    $date = $_POST['date'];
    $id_menu = $_POST['id_menu'];
    
    $requete = $connexion->prepare("INSERT INTO `calendrier`
    (`id`, `date`, `id_menu`)
    VALUES (NULL, :date, :id_menu)");
    
    $requete->bindParam(':date', $date); 
    $requete->bindParam(':id_menu', $id_menu); 
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    // header('location:index.php?table=service');

    // header('location:index.php?table=service');