<?php
//j'importe les fonctions pour avoir les infos de la base de donnée des articles et commentaires des auteurs
include 'app/persistances/blogPostData.php';

//on définie les variables utiles pour le views


$article = get_article($pdo,$_GET['id']);
$comments = get_comment($pdo,$_GET['id']);


//j'importe les pages de HTML
include 'ressource/views/layouts/header.tpl.php';
include 'ressource/views/blog_art_com.php';
include 'ressource/views/layouts/footer.tpl.php';
?>