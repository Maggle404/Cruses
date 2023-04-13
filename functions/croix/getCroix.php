<?php

    // Se connecter à la base de données grâce à PDO et aux credentials du fichier .env.

    try {
            
        $bdd = new PDO('mysql:host=localhost;dbname=lucas.briand;charset=utf8', 'root', '');

    } catch (Exception $e) {

        die('Erreur : ' . $e->getMessage());

    }
    
    // Préparer la requête SQL pour récupérer le nom, l'image, l'id des croix.
    
    $recupererCroix = $bdd->prepare('SELECT NAME, LINK, ID FROM croix');

    $recupererCroix->execute();

    // Afficher les croix.

    while ($croix = $recupererCroix->fetch()) {

        echo '<div class="croix">';

        echo '<h3>' . $croix['NAME'] . '</h3>';

        echo '<p>' . $croix['DESCRIPTION'] . '</p>';

        echo '<img src="' . $croix['LINK'] . '" alt="Image de la croix">';

        echo '</div>';

    }

?>