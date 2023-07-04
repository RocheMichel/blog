<?php
include 'app/persistances/blogPostData.php';
include 'ressource/views/home.tpl.php';
$articlesData = lastBlogPost($pdo);
var_dump($articlesData);




