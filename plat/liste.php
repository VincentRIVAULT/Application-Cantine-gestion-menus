<?php

// sélection des enregistrements
$requete = "SELECT *
            FROM `plat`
            
            ORDER BY id"; 
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC); 


echo "<p><a href='index.php?table=plat&action=ajouter'><button type='button' class='btn btn-primary'>Ajouter</button></a></p>";

echo "<table class='table table-striped'>";
echo "
    <tr class=text-center>
    <th>id</th>
    <th>Nom du plat</th>
    <th>Photo du plat</th>
    <th>Type de plat</th>
    <th>Supp</th>
    <th>Modif</th>
    </tr>";
foreach($liste as $plat) {
    echo "<tr class=text-center><td>"  
    . $plat['id'] 
    . "</td><td>"
    . $plat['nom'] 
    . "</td><td>" 
    . $plat['photo'] 
    . "</td><td>"
    . $plat['type'] 
    . "</td><td>"
    . "<a href='index.php?table=plat&action=supprimer&id="
    . $plat['id']
    . "'><button type='button' class='btn btn-danger'>Supprimer</button></a>"
    . "</td><td>"
    . "<a href='index.php?table=plat&action=modifier&id="
    . $plat['id']
    . "'><button type='button' class='btn btn-warning'>Modifier</button></a>"
    . "</td></tr>";
}
echo "</table>";