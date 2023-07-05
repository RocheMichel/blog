<?php
//En dessus j'appel la fonction lastblogPost qui ce trouve dans lastBlogpost.sql
//ça me permet d'aller chercher les élément qui ce trouve dans ma base de donnée
include 'app/persistances/blogPostData.php';
$articlesData = lastBlogPost($pdo);
//var_dump($articlesData);
//La j'inclu les vue c'est à dire le header le main et le footer
include 'ressource/views/layouts/header.tpl.php';
include 'ressource/views/home.tpl.php';
include 'ressource/views/layouts/footer.tpl.php';





