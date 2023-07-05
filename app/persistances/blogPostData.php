<?php
//fonction qui renvoie la page lastBlogPoste
include 'config/database.php';


function lastBlogPost($pdo): array
{
    $requestcontent = file_get_contents("database/lastBlogPost.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent->execute();
    return $rawcontent->fetchAll(PDO::FETCH_ASSOC);
}

//Cette fonction me renvoie les commentaire avec le contenue le titre de l'article
// et le pseudo de l'auteur qui à écrit le commentaire dans la pageblog_art_com.php
function get_comment($pdo,$numeroArticle): array
{
    $requestcontent = file_get_contents("database/get_comment.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent ->bindValue('id_Art',$numeroArticle,PDO::PARAM_INT);
    $rawcontent->execute();
    return $rawcontent->fetchAll(PDO::FETCH_ASSOC);
}


//Cette fonction va être utilisé dans la page home.tpl.php
// pour afficher les article avec le nom d l'author
function get_article($pdo,$numeroArticle): array
{
    $requestcontent = file_get_contents("database/get_article.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent ->bindValue('id_Art',$numeroArticle,PDO::PARAM_INT);
    $rawcontent->execute();
    return $rawcontent->fetch(PDO::FETCH_ASSOC);
}
//Je vais créer une fonction qui va permetre déffacer un article qui s'appelle blogPostDelete
function delete_article($pdo, $numeroArticle):bool
{
    $requestcontent = file_get_contents("database/deletearticle.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent ->bindValue('id_Art',$numeroArticle,PDO::PARAM_INT);
    $rawcontent->execute();
    return true;
}
