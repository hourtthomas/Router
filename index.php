<?php

require 'vendor/autoload.php';

$router = new App\Router($_GET['url']);

$router->get('/posts', function(){ echo 'Tous les posts';});
$router->get('/posts/:id', function($id){ echo "Afficher le post n°".$id;});
$router->post('/posts/:id', function($id){ echo "Poster le post n°".$id;});