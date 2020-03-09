<?php

$menu_id = $_GET['id'];

$requete = $connexion->prepare("DELETE FROM menu WHERE id = :menu_id");

$requete->bindParam(':menu_id', $menu_id);  
 
$resultat = $requete->execute(); 

var_dump($requete);

var_dump($resultat);

var_dump($requete->errorCode());

var_dump($requete->errorInfo());

// header('location:index.php');

// header('location:index.php');