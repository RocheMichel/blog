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

//fonction blogPostByld qui ...
function get_comment($pdo): array
{
    $requestcontent = file_get_contents("database/get_comment.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent->execute();
    return $rawcontent->fetchAll(PDO::FETCH_ASSOC);
}


//fonction qui renvoie la page blogPostByld.php
function get_article($pdo,$numeroArticle): array
{
    $requestcontent = file_get_contents("database/get_article.sql");
    $rawcontent = $pdo->prepare($requestcontent);
    $rawcontent ->bindValue('id_Art',$numeroArticle,PDO::PARAM_INT);
    $rawcontent->execute();
    return $rawcontent->fetch(PDO::FETCH_ASSOC);
}

