<?php
include 'app/persistances/blogPostData.php';

$articlesData = lastBlogPost($pdo);
//var_dump($articlesData);
include 'ressource/views/home.tpl.php';



