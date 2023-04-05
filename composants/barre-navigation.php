<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Lier au css de la barre de navigation. -->
        <link rel="stylesheet" href="css/barre-navigation.css">
        
    </head>
    
    <body>

        <div class="barre-navigation">

            <div class="logo">

                <a href="/accueil.php"><img id="logo" src="img/1200px-Cross-Pattee-Alisee.svg.png" alt="logo"></a>

            </div>

            <div class="menu">

                <ul class="buttons">

                    <li><a href="accueil.php">Accueil</a></li>

                    <li><a href="croix.php">Croix</a></li>

                    <li><a href="produits.php">Produits</a></li>

                    <li><a href="contact.php">Contact</a></li>

                    <!-- TODO : Si l'utilisateur est connecté, afficher le bouton "admin" à la place de "Connexion" -->

                    <li><a href="connexion.php">Connexion</a></li>

                </ul>

            </div>

        </div>

    </body>

</html>