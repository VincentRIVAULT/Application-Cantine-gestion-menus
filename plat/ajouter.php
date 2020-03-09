<?php


// sélection des enregistrements
$requete = $connexion->prepare("SELECT * FROM plat WHERE type = :type");
$requete->bindParam(':type', $type);

$type = "entree";
$requete->execute();
$liste_entree = $requete->fetchAll(PDO::FETCH_ASSOC); 

$type = "plat_principal";
$requete->execute();
$liste_plat = $requete->fetchAll(PDO::FETCH_ASSOC); 

$type = "dessert";
$requete->execute();
$liste_dessert = $requete->fetchAll(PDO::FETCH_ASSOC); 

var_dump($liste_entree);
var_dump($liste_plat);
var_dump($liste_dessert);


?>

<h1>Ajout d'un plat</h1>

<form action="index.php?table=plat&action=ajoutBDD" method="post" enctype="multipart/form-data">
    <p><label for="">Nom du plat : </label>
        <input type="text" name="nom" id="">
    </p>
    
    <p><label for="">Type : </label>
        <input type="radio" name="type" id="" value="entree">
        <label for="">Entrée</label>
        <input type="radio" name="type" id="" value="plat_principal">
        <label for="">Plat principal</label>
        <input type="radio" name="type" id="" value="dessert">
        <label for="">Dessert</label>
    <p>
    
    </p>
    <p><label for="">Photo : </label>
        <input type="file" name="photo" id="">
    </p> 

    <p><label for=""></label><input type="submit" value="Valider"></p>

</form>




    




