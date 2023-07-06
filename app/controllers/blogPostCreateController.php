
<?php
//j'importe les fonctions pour avoir les infos de la base de donnée des articles et commentaires des auteurs
include 'app/persistances/blogPostData.php';
//on définie les variables utiles pour le views
$createarticle = blogPostCreate($pdo,'sport','gfsgf',2,'2023-06-28 00:00:00',4);

include 'ressource/views/layouts/header.tpl.php';
include 'ressource/views/layouts/blogPostCreate.tpl.php';
include 'ressource/views/layouts/footer.tpl.php';
?>