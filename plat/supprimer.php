<?php

$plat_id = $_GET['id'];

$requete = $connexion->prepare("DELETE FROM plat WHERE id = :plat_id");

$requete->bindParam(':plat_id', $plat_id);  
 
$resultat = $requete->execute(); 

var_dump($requete);

var_dump($resultat);

var_dump($requete->errorCode());

var_dump($requete->errorInfo());

// header('location:index.php');

// header('location:index.php');