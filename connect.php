<?php

    // déclaration en local
    define('SERVER'     ,"localhost");
    define('USER'       ,"root");
    define('PASSWORD'   ,"");
    define('BASE'       ,"cantine_v2"); 

    // déclaration à distance
    // define('SERVER'     ,"");
    // define('USER'       ,"");
    // define('PASSWORD'   ,"");
    // define('BASE'       ,"");

    // connexion
    try { 
        $connexion = new PDO("mysql:host=".SERVER.";dbname=".BASE, USER, PASSWORD);
        $connexion->exec("SET NAMES 'UTF8'");
        // echo "<p>Vous êtes connecté</p>";
    } catch (Exception $e) { 
        echo '<p>Erreur : ' . $e->getMessage() . ' </p>';
    }

    