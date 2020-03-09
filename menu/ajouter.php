<?php


// sélection des enregistrements
$requete = $connexion->prepare("SELECT * FROM plat WHERE type = :type");
$requete->bindParam(':type', $type);

$type = "entree";
$requete->execute();
$liste_entree = $requete->fetchAll(PDO::FETCH_ASSOC); 

$type = "plat_principal";
$requete->execute();
$liste_plat_principal = $requete->fetchAll(PDO::FETCH_ASSOC); 

$type = "dessert";
$requete->execute();
$liste_dessert = $requete->fetchAll(PDO::FETCH_ASSOC); 

var_dump($liste_entree);
var_dump($liste_plat_principal);
var_dump($liste_dessert);


?>

<h1>Ajout d'un menu</h1>

<form action="index.php?table=menu&action=ajoutBDD" method="post" enctype="">
    <p><label for="">Entrée : </label>
    <select name="entree" id="">
        <?php
            foreach ($liste_entree as $entree) {
                echo "<option value='" . $entree['id'] . "'>" . $entree['nom'] . "</option>";
            }
        ?>    
    </select>
    </p>
    <p><label for="">Plat principal : </label>
    <select name="plat_principal" id="">
        <?php
            foreach ($liste_plat_principal as $plat_principal) {
                echo "<option value='" . $plat_principal['id'] . "'>" . $plat_principal['nom'] . "</option>";
            }
        ?>    
    </select>
    </p>
    <p><label for="">Dessert : </label>
    <select name="dessert" id="">
        <?php
            foreach ($liste_dessert as $dessert) {
                echo "<option value='" . $dessert['id'] . "'>" . $dessert['nom'] . "</option>";
            }
        ?>    
    </select>
    </p>

    <p><label for=""></label><input type="submit" value="Valider"></p>

</form>




    




