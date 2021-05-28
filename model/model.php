<?php

require_once("../model/Manager.php");


class Model extends Manager
{

    public function signup()
    {
        $db = $this->dbConnect();

        $req = $db->prepare("INSERT INTO users(`userName`,`email`,`password`) VALUES (:userNme,:email,:password)");
        // $req = bindParam(':userName', $_POST['userName'], PDO::PARAM_STR);
        // $req = bindParam(':password', $_POST['password'], PDO::PARAM_STR);
        // $req = bindParam(':email', $_POST['email'], PDO::PARAM_STR);
        if ($req->execute()) {
            return true;
        } else {
            false;
        }
    }
}
