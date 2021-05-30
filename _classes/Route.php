<?php



class Route
{

    private static $routeFound = false;

    public static function get($route, $function)
    {
        if (!isset($_GET['url'])) {
            $url = "/";
        } else {
            $url = $_GET['url'];
        }
        if (self::$routeFound == false && $url == $route && $_SERVER['REQUEST_METHOD'] == "GET") {
            self::$routeFound == true;
            $request = $_GET;
            $function($request);
        } else {

            // echo "Url Or GET Method not supported";
        }
    }


    public static function post($route, $function)
    {

        if (!isset($_GET['url'])) {
            $url = "/";
        } else {
            $url = $_GET['url'];
        }
        if (self::$routeFound == false && $url == $route && $_SERVER['REQUEST_METHOD'] == "POST") {
            self::$routeFound == true;
            $request = $_POST;
            $function($request);
        } else {
            // echo "Url Or POST Method not supported";
        }
    }
}
