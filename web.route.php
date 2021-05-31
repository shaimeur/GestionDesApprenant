<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = "/";
}



if ($url == "/") {
    require_once("./view/home.php");
}


if ($url == "/signup") {
    require_once("./view/signup.php");
}
if ($url == "/signup/add") {
    require_once "./controller/userController.php";
    $userController = new userController();
    $userController->userSignup();
}
if ($url == "/login") {
    require_once("./view/login.php");
}
if ($url == "/login/loged") {
    require_once "./controller/userController.php";
    $userController = new userController();
    $userController->userLogin();
}
if ($url == "/logout") {
    session_unset();
    session_destroy();
    require_once "./view/home.php";
}

if ($url == "/forgotpassword") {
    require_once("./view/forgotpassword.php");
}
if ($url == "/apprenant") {
    require_once("./controller/apprenantController.php");
    $apprenantController = new apprenantController();
    $apprenantController->SignUpComplet();
}
if ($url == "/profile") {
    require_once "./view/profile.php";
}
