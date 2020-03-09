<?php

    $menu_id = $_POST['id'];

    $date = $_POST['date'];
    $id_menu = $_POST['id_menu'];

    $requete = $connexion->prepare("UPDATE `calendrier`
    SET `date`= :date,`id_menu`= :id_menu
    WHERE id = :menu_id");
    
    $requete->bindParam(':date', $date); 
    $requete->bindParam(':id_menu', $id_menu); 
    $requete->bindParam(':menu_id', $menu_id);   
    
    $resultat = $requete->execute(); 

    var_dump($requete);

    var_dump($resultat);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());


    // header('location:index.php?table=service');

    // header('location:index.php?table=service');