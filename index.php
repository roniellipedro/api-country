<?php

define("CONTROL", true);

$routes = require_once("inc/routes.php");
require_once("inc/api_consumer.php");

$route = $_GET["route"] ?? "home";

if (!in_array($route, $routes)) {
    $route = "404";
}

switch ($route) {
    case "home":
        require_once("inc/header.php");
        require_once("scripts/home.php");
        require_once("inc/footer.php");
        break;
    case "country":
        require_once("inc/header.php");
        require_once("scripts/country.php");
        require_once("inc/footer.php");
        break;
    case "404":
        require_once("inc/header.php");
        require_once("scripts/404.php");
        require_once("inc/footer.php");
        break;
}
