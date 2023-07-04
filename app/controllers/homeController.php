<?php
include 'app/persistances/blogPostData.php';
$articlesData = lastBlogPost($pdo);
var_dump($articlesData);
