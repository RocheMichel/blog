
<?php
//j'importe les fonctions pour avoir les infos de la base de donnée des articles et commentaires des auteurs
include 'app/persistances/blogPostData.php';
//on définie les variables utiles pour le views
$createarticle = SET_article($pdo,$_GET['id']);
//j'importe les pages de HTML
// redirect accueil
?>