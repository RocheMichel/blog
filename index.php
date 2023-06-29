<?php
session_start();
$action = filter_intput(INTPUT_GET,'action', filter_sanitize_string);

$routes =[
    ''  => 'home.php',
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php'
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

?>