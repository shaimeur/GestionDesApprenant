<?php

require_once("./model/Manager.php");


class Model extends Manager
{


    public function signup()
    {

        try {
            $req = $this->db->prepare("INSERT INTO users (`userName`,`email`,`password`) VALUES (:userName,:email,:password)");
            $req->bindParam(':userName', $_POST['userName'], PDO::PARAM_STR);
            $req->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
            $req->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $req->execute();
            return true;
        } catch (Exception $th) {
            echo $th->getMessage();
            return false;
        }
    }
    public function login()
    {
        try {
            $req = $this->db->prepare("SELECT `email`, `password` FROM users ");
            if ($req->execute()) {
                return true;
            }
        } catch (Exception $l) {
            echo $l->getMessage();
            return false;
        }
    }
}
