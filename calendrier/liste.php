<?php


// sélection des enregistrements
$requete = "SELECT calendrier.*, calendrier.id as calendrier_id, menu.*
            FROM `calendrier`
            JOIN menu
            ON menu.id = calendrier.id_menu"; 

            // "SELECT calendrier.*,  calendrier.id as id_calendrier, menu.*, menu.id as id_menu,
            // plat_entree.nom as nom_entree,
            // plat_principal.nom as nom_plat_principal,
            // plat_dessert.nom as nom_dessert
            // FROM calendrier
            // JOIN menu
            // ON calendrier.id_menu = menu.id
            // JOIN plat as plat_entree
            // ON menu.entree = plat_entree.id
            // JOIN plat as plat_principal
            // ON menu.plat_principal = plat_principal.id
            // JOIN plat as plat_dessert
            // ON menu.dessert = plat_dessert.id
            // ORDER BY calendrier.date";

$resultat = $connexion->query($requete);
$liste = $resultat->fetchAll(PDO::FETCH_ASSOC); 


echo "<p><a href='index.php?table=calendrier&action=ajouter'><button type='button' class='btn btn-primary'>Ajouter</button></a></p>";

echo "<table class='table table-striped'>";
echo "
    <tr class=text-center>
    <th>id</th>
    <th>Date</th>
    <th>id Menu</th>
    <th>Entrée</th>
    <th>Plat principal</th>
    <th>Dessert</th>
    <th>Supp</th>
    <th>Modif</th>
    </tr>";
foreach($liste as $calendrier) {
    echo "<tr class=text-center><td>"  
    . $calendrier['calendrier_id'] 
    . "</td><td>"
    . $calendrier['date'] 
    . "</td><td>" 
    . $calendrier['id_menu'] 
    . "</td><td>"
    . $calendrier['entree'] 
    . "</td><td>"
    . $calendrier['plat_principal'] 
    . "</td><td>"
    . $calendrier['dessert'] 
    . "</td><td>"
    . "<a href='index.php?table=calendrier&action=supprimer&id="
    . $calendrier['calendrier_id']
    . "'><button type='button' class='btn btn-danger'>Supprimer</button></a>"
    . "</td><td>"
    . "<a href='index.php?table=calendrier&action=modifier&id="
    . $calendrier['calendrier_id']
    . "'><button type='button' class='btn btn-warning'>Modifier</button></a>"
    . "</td></tr>";
}
echo "</table>";