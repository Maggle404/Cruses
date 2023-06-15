<?php

    // Se connecter à la base de données grâce à PDO et aux credentials du fichier .env.

    try {
            
        $bdd = new PDO('mysql:host=localhost;dbname=lenny.mallet;charset=utf8', 'root', '');

    } catch (Exception $e) {

        die('Erreur : ' . $e->getMessage());

    }
    
    // Préparer la requête SQL pour récupérer l'acheteur, le produit, le prix et la date des achats'
    
    $recupererHistorique = $bdd->prepare('SELECT acheteur, produit, prix, date FROM historique');

    $recupererHistorique->execute();

    // Afficher l'historique des achats.

    while ($historique = $recupererHistorique->fetch()) {

        echo '<div class="achats">';

            echo '<h2>' . $historique['acheteur'] . '</h2>';

            echo '<img src="' . $historique['produit'] . '" alt="Produit" class="crossimage">';

            echo '<h2>' . $historique['prix'] . '</h2>';
            
            echo '<h2>' . $historique['date'] . '</h2>';

        echo '</div>';

    }

?>