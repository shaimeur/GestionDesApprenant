<?php
session_start();
// require_once "./_helpers/functions.php";
// require_once "./_classes/Route.php";
// require_once("./web.route.php");
require_once("controller/Controller.php");


$controller = new Controller();
$controller->invoke();
$controller->loginfo();
