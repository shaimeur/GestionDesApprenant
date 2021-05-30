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
        if ($result) {
            require('./view/login.php');
            // print_r($_POST);
        } else {
            echo '  Erreur signup!!';
        }
    }
    public function loginfo()
    {
        $result = $this->model->login();
        if ($result) {
            require('./view/dashbord.php');
        } else {
            echo 'Erreur de login !';
        }
    }
}
