<?php

// sélection des enregistrements
$requete = "SELECT menu.*, plat_entree.nom AS nom_entree, plat_principal.nom AS nom_plat_principal, plat_dessert.nom AS nom_dessert
            FROM `menu`
            JOIN plat AS plat_entree
            ON menu.entree = plat_entree.id
            JOIN plat AS plat_principal
            ON menu.plat_principal = plat_principal.id
            JOIN plat AS plat_dessert
            ON menu.dessert = plat_dessert.id
            ORDER BY id"; 
$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC); 


echo "<p><a href='index.php?table=menu&action=ajouter'><button type='button' class='btn btn-primary'>Ajouter</button></a></p>";

echo "<table class='table table-striped'>";
echo "
    <tr class=text-center>
    <th>Menu n°</th>
    <th>Entrée</th>
    <th>Plat principal</th>
    <th>Dessert</th>
    <th>Supp</th>
    <th>Modif</th>
    </tr>";
foreach($liste as $menu) {
    echo "<tr class=text-center><td>"  
    . $menu['id'] 
    . "</td><td>"
    . $menu['nom_entree'] 
    . "</td><td>" 
    . $menu['nom_plat_principal'] 
    . "</td><td>"
    . $menu['nom_dessert'] 
    . "</td><td>"
    . "<a href='index.php?table=menu&action=supprimer&id="
    . $menu['id']
    . "'><button type='button' class='btn btn-danger'>Supprimer</button></a>"
    . "</td><td>"
    . "<a href='index.php?table=menu&action=modifier&id="
    . $menu['id']
    . "'><button type='button' class='btn btn-warning'>Modifier</button></a>"
    . "</td></tr>";
}
echo "</table>";