<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/index.css">
    <script src="<?php echo RACINE_SITE; ?>inc/js/main.js"></script>
    <title>Mon Site</title>
</head>

<body>
    <header>
        <div class="conteneur">
            <nav class="topnav" id="myTopNav"><a href="" title="Mon Site">MonSite.com</a>
                <?php
                if (internauteEstConnecteEtEstAdmin()) {
                    echo '<a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a>';
                    echo '<a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a>';
                    echo '<a href="' . RACINE_SITE . 'admin/gestion-boutique.php">Gestion des boutiques</a>';
                }
                if (internauteEstConnecte()) {
                    echo '<a href="' . RACINE_SITE . 'profil.php">Voir votre profil</a>';
                    echo '<a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>';
                    echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
                    echo '<a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a>';
                } else {
                    echo '<a href="' . RACINE_SITE . 'inscription.php">Inscription</a>';
                    echo '<a href="' . RACINE_SITE . 'connexion.php">Connexion</a>';
                    echo '<a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a>';
                    echo '<a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a>';
                }

                ?>

                <a href="javascript:void(0);" class="icon" onclick="toggleNav()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </div>
    </header>
    <section>
        <div class="conteneur">
</body>

</html>