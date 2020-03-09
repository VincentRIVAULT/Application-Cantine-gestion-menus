<?php

    $menu_id = $_GET['id'];

    $requete = $connexion->prepare("SELECT * FROM menu WHERE id = :menu_id");

    $requete->bindParam(':menu_id', $menu_id);  
    
    $resultat = $requete->execute(); 

    $liste = $requete->fetch(PDO::FETCH_ASSOC);

    var_dump($requete);

    var_dump($resultat);

    var_dump($liste);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

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

<h1>Modifier un menu</h1>

<form action="index.php?table=menu&action=modifBDD" method="post">
    <p><label for="">Menu n° : </label><input type="text" name="id" id="" value="<?php echo $liste['id'] ?>" readonly></p>
    <p><label for="">Entrée : </label>
    <select name="entree" id="">
        <?php
            foreach ($liste_entree as $entree) {
                if ($entree['id'] == $liste['entree']) {
                    echo "<option value='" . $entree['id'] . "' selected>" . $entree['nom'] . "</option>";
                } else {
                    echo "<option value='" . $entree['id'] . "'>" . $entree['nom'] . "</option>";
                }
            }

            // ecriture ternaire
            // $selected = ($liste['entree'] == $entree['id'])?"selected":"";
        ?>    
    </select>
    </p>
    <p><label for="">Plat principal : </label>
    <select name="plat_principal" id="">
        <?php
            foreach ($liste_plat_principal as $plat_principal) {
                if ($plat_principal['id'] == $liste['plat_principal']) {
                    echo "<option value='" . $plat_principal['id'] . "' selected>" . $plat_principal['nom'] . "</option>";
                } else {
                    echo "<option value='" . $plat_principal['id'] . "'>" . $plat_principal['nom'] . "</option>";
                }
                
            }
        ?>    
    </select>
    </p>
    <p><label for="">Dessert : </label>
    <select name="dessert" id="">
        <?php
            foreach ($liste_dessert as $dessert) {
                if ($dessert['id'] == $liste['dessert']) {
                    echo "<option value='" . $dessert['id'] . "' selected>" . $dessert['nom'] . "</option>";
                } else {
                    echo "<option value='" . $dessert['id'] . "'>" . $dessert['nom'] . "</option>";
                }
                
            }
        ?>    
    </select>
    </p>

    <p><label for=""></label><input type="submit" value="Modifier"></p>

</form>




    




