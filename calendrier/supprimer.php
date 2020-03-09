<?php

$calendrier_id = $_GET['id'];


$requete = $connexion->prepare("DELETE FROM `calendrier` WHERE id = :calendrier_id");

$requete->bindParam(':calendrier_id', $calendrier_id);  
 
$resultat = $requete->execute(); 

var_dump($requete);

var_dump($resultat);

var_dump($requete->errorCode());

var_dump($requete->errorInfo());

// header('location:index.php');

// header('location:index.php');