<?php

    $calendrier_id = $_GET['id'];
 

    $requete = $connexion->prepare("SELECT * FROM `calendrier` WHERE id = :calendrier_id");

    $requete->bindParam(':calendrier_id', $calendrier_id);  
    
    $resultat = $requete->execute(); 

    $liste = $requete->fetch(PDO::FETCH_ASSOC);

    var_dump($requete);

    var_dump($resultat);

    var_dump($liste);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());


    $requete_menus = "SELECT * FROM menu"; 
    $resultat_menus = $connexion->query($requete_menus);
    $liste_menus = $resultat_menus->fetchAll(PDO::FETCH_ASSOC);
    
?>    

<h1>Modifier une date</h1>

<form action="index.php?table=calendrier&action=modifBDD" method="post">
    <p><label for="">Calendrier_id : </label><input type="text" name="id" id="" value="<?php echo $liste['id'] ?>" readonly></p>
    <p><label for="">Date : </label><input type="date" name="date" id="" value="<?php echo $liste['date'] ?>"></p>
    <p><label for="">Menu : </label>
    <select name="id_menu" id="">
        <?php
            foreach ($liste_menus as $menu) {
                if ($menu['id'] == $liste['id']) {
                    echo "<option value='" . $menu['id'] . "' selected>" . $menu['id'] . " | " . $menu['entree'] . " | " . $menu['plat_principal'] . " | " . $menu['dessert'] . "</option>";
                } else {
                echo "<option value='" . $menu['id'] . "'>" . $menu['id'] . " | " . $menu['entree'] . " | " . $menu['plat_principal'] . " | " . $menu['dessert'] . "</option>";
                }
            }
        ?>    
    </select>
    </p>   

    <p><label for=""></label><input type="submit" value="Modifier"></p>

</form>




    




