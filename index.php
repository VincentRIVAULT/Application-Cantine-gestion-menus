<?php
    
    include 'connect.php';

    include 'includes/head.php';

    include 'includes/menu.php';

    // conversion date au format français
    setlocale(LC_TIME, "fr_FR");


    if (isset($_GET['table'])) {
        $table = $_GET['table'];
    } else {
        $table = 'menu';
    }
    
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'liste';
    }

    switch ($action) {
        case 'liste' :
            include $table . '/liste.php';
        break;
        
        case 'ajouter' :
            include $table . '/ajouter.php';
        break;

        case 'ajoutBDD' :
            include $table . '/ajoutBDD.php';
        break;

        case 'supprimer' :
            include $table . '/supprimer.php';
        break;

        case 'modifier' :
            include $table . '/modifier.php';
        break;

        case 'modifBDD' :
            include $table . '/modifBDD.php';
        break;

        case 'formulaire' :
            include $table . '/formulaire.php';
        break;

        case 'envoiMail' :
            include $table . '/envoiMail.php';
        break;

        default :
            echo "erreur 404";
        break;
    }

    include 'includes/footer.php';
