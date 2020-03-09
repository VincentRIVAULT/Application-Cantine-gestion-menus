<?php

    $plat_id = $_GET['id'];

    $requete = $connexion->prepare("SELECT * FROM plat WHERE id = :plat_id");

    $requete->bindParam(':plat_id', $plat_id);  
    
    $resultat = $requete->execute(); 

    $liste = $requete->fetch(PDO::FETCH_ASSOC);

    var_dump($requete);

    var_dump($resultat);

    var_dump($liste);

    var_dump($requete->errorCode());

    var_dump($requete->errorInfo());

    
?>    

<h1>Modifier un plat</h1>

<form action="index.php?table=plat&action=modifBDD" method="post">
    <p><label for="">id plat : </label><input type="text" name="id" id="" value="<?php echo $liste['id'] ?>" readonly></p>
    <p><label for="">Nom du plat : </label>
        <input type="text" name="nom" id="" value="<?php echo $liste['nom'] ?>">
    </p>
    
    <p><label for="">Type de plat : </label>
        <input type="radio" name="type" id="" value="entree" 
            <?php
                if ($liste['type'] == 'entree') {
                    echo "checked";
                } 
            ?>
        >
        <label for="">Entrée</label>

        <input type="radio" name="type" id="" value="plat_principal"
            <?php
                if ($liste['type'] == 'plat_principal') {
                    echo "checked";
                }
            ?>
        >
        <label for="">Plat principal</label>

        <input type="radio" name="type" id="" value="dessert"
            <?php
                if ($liste['type'] == 'dessert') {
                    echo "checked";
                }
            ?>
        >
        <label for="">Dessert</label>
    </p>
    <p><label for="">Photo : </label>
        <input type="file" name="photo" id="" value="<?php echo $liste['photo'] ?>">
    </p>     

    <p><label for=""></label><input type="submit" value="Modifier"></p>

</form>




    




