<?php


function controller($controller, $method)
{
    $controllerFile = __DIR__ . "/../controller/" . $controller . "Controller.php";


    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        $controller = $controller . "Controller";
        $controllerClass = new $controller();
        $controllerClass->$method();
    } else {
        echo "Controller file not found";
    }
}

function view($view, array $data = array())
{
    $viewFile = __DIR__ . "/../view/" . $view . ".php";

    if (file_exists($viewFile)) {
        extract($data);
        require_once $viewFile;
    } else {
        echo "View file not found";
    }
}

function validate($data, $type)
{
    switch ($type) {
        case 'email':
            if (filter_var($data, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
            break;
        default:
            # code...
            break;
    }
}
