<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>www.cruces.com - les différents styles de croix</title>
        <link rel="stylesheet" href="css/main.css">

    </head>

    <body>
        
        <?php include 'composants/barre-navigation.php'; ?>

        <?php include 'functions/produits/getHistorique.php'; ?>

        <section>

            <h1>Historique des commandes</h1>

            <div class="collection">
                    
                <?php include 'functions/produits/getHistorique.php'; ?>

            </div>

        </section>
        
    </body>

</html>