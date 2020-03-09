<?php

// sélection des enregistrements
$requete = "SELECT * 
            FROM `menu`";
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC); 

var_dump($liste);

?>

<h1>Ajout d'une date</h1>

<form action="index.php?table=calendrier&action=ajoutBDD" method="post">
    <p><label for="">Date : </label><input type="date" name="date" id=""></p>
    <p><label for="">Menu :</label>
    <select name="id_menu" id="">
        <?php
            foreach ($liste as $menu) {
                echo "<option value='" . $menu['id'] . "'>" . $menu['id'] . " | " . $menu['entree'] . " | " . $menu['plat_principal'] . " | " . $menu['dessert'] . "</option>";
            }
        ?>    
    </select>
    </p>

    <p><label for=""></label><input type="submit" value="Valider"></p>

</form>




    




