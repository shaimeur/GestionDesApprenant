<?php
require_once("model/Model.php");

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }
    public function invoke()
    {
        $result = $this->model->signup();
        if ($result == true) {
            include './view/login.php';
        } else {
            echo '  A Tebi!!';
        }
    }
}
