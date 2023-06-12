<?php

require('./inc/init.inc.php');
require('./inc/haut.inc.php');

// Pour le debug
// var_dump(RACINE_SITE);
// echo '<br>';
// echo session_status();
//notre accueil
?>
<h2>Notre page d'accueil</h2>
<img src="http://localhost/public/img/00000001_noir.jpg">
<p>Coincée entre le haut et le bas!</p>

<?php
//t Récuperer la valeur de la variable
echo getenv('NOM_VARIABLE');
echo '<br>ou<br>';
echo $_ENV['NOM_VARIABLE'];
echo $_ENV['TEST'];

require('./inc/bas.inc.php');
