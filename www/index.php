<?php

$uri = $_SERVER["REQUEST_URI"];

$routes = yaml_parse_file("routes.yml");

$controller = $routes[$uri]["controller"];
$action = $routes[$uri]["action"];

//Inclure la classe dont j'ai besoin
require "Controllers/".$controller.".php";
//Faire une instance de cette classe
$instance = new $controller();
//Appeler l'action dans le controller
$instance->$action();