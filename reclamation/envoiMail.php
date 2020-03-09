<?php
    

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    var_dump($_POST);

    
    /**  * Import des classes PHPMailer dans l’espace de nommage * Ces instructions doivent être placées en début de script */  
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception; 
    
    require 'lib/PHPMailer-master/src/PHPMailer.php'; 
    require 'lib/PHPMailer-master/src/Exception.php'; 
    
    /** * Instanciation de la variable */ 
    $mail = new PHPMailer();

    // Vérification des données reçues du formulaire 
    $nom = "pas de nom"; 
    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
         $nom = $_POST['nom']; 
    } 
    $prenom = "pas de prénom"; 
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = $_POST['prenom']; 
    }

    /** * Tentative d’envoi de mail */ 
    try { 
        // Ajout des attributs 
        $mail->From = $email; 
        $mail->FromName = $nom . " " . $prenom; 
        $mail->Subject = $objet; 
        $mail->Body = $message;
        $mail->CharSet = 'UTF-8';  
        
        // Ajout des méthodes 
        $mail->AddAddress("rivaultv@yahoo.fr", "Moi"); 

        if (isset($_FILES['fichier']) &&  ($_FILES['fichier']['error'] == 0)) {
            $fichier = $_FILES['fichier']['name']; 
            $chemin  = $_FILES['fichier']['tmp_name']; 
            echo "envoi du mail avec PJ!!!<br />"; 
            echo "source: ".$chemin."/". $fichier; 
            $mail->AddAttachment($chemin, $fichier); 
        } else { 
            echo "envoi du mail sans PJ<br />"; 
        }

        $envoiOK = $mail->Send(); 
    } 
    
    /** * Traitement de l’exception levée en cas d’erreur */ 
    catch (Exception $e) { 
        echo 'Message non envoyé'; 
        echo 'Erreur: ' . $mail->ErrorInfo; 
    }

    if ($envoiOK) {
        echo "<h2 class='alert alert-success'>Votre mail est bien envoyé</h2>";
    } else {
        echo "<h2 class='alert alert-danger'>Problème lors de l'envoi du mail</h2>";
    }

    echo "<pre>";
    var_dump($mail);


