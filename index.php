<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_URL);

$routes =[
    '' => 'app/controllers/homeController.php',
    'index' => 'app/controllers/homeController.php',
    'home' => 'app/controllers/homeController.php',
    'blogPost' =>'app/controllers/blogPostController.php',
    //ajoutez d'autres routes ici
];

if(!array_key_exists($action, $routes)){
    //si la page demandée n'existe pas dans $routes, renvoyer une erreur 404
    header("HTTP/1.0 404 Not Found");
    include('404.php'); // supposons que vous avez un fichier 404.php pour gérer les erreurs 404
}else{
    //Si la page demandée existe dans $route inclure le fichier php correspondant
    include $routes[$action];
}
