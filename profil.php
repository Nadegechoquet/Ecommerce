<?php
require_once("inc/init.inc.php");

if (!internauteEstConnecte()) header("location:connexion.php");
$contenu .= '<div class="profil"><p class="centre">Bonjour <strong>' . $_SESSION['utilisateur']['pseudo'] . '<strong></p>';
$contenu .= '<div class="cadre"><h2> Voici vos informations </h2>';
$contenu .= '<p> Votre e-mail est: ' . $_SESSION['utilisateur']['email'] . '<p><br>';
$contenu .= '<p> Votre ville est: ' . $_SESSION['utilisateur']['ville'] . '<p><br>';
$contenu .= '<p> Votre cp est: ' . $_SESSION['utilisateur']['code_postal'] . '<p><br>';
$contenu .= '<p> Votre adresse est: ' . $_SESSION['utilisateur']['adresse'] . '<p></div></div><br><br>';

require_once("inc/haut.inc.php");
echo $contenu;
require_once("inc/bas.inc.php");
