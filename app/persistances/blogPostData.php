<?php
include 'config/database.php';
function lastBlogPost($serveurPDO): array
{
    $requestcontent = file_get_contents("database/lastBlogPost.sql");
    var_dump($requestcontent);
    $rawcontent = $serveurPDO->prepare($requestcontent);
    $rawcontent->execute();
    return $rawcontent->fetchAll(PDO::FETCH_ASSOC);
}

