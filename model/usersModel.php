<?php

require_once("./model/Manager.php");


class userModel extends Manager
{


    public function creat()
    {

        try {
            $req = $this->db->prepare("INSERT INTO users (`username`,`email`,`password`) VALUES (:username,:email,:password)");
            $req->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
            $req->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
            $req->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
            $req->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function findByEmail($email)
    {
        try {
            $req = $this->db->prepare("SELECT * FROM users where email=:email ");
            $req->bindParam(':email', $email, PDO::PARAM_STR);
            if ($req->execute()) {
                return $req->fetch(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
    // public function delete()
    // {
    //     try {
    //         $req = $this->db->prepare("");
    //         if ($req->execute()) {
    //             return true;
    //             echo "LOGOUT DONE";
    //         }
    //     } catch (\Throwable $lgo) {
    //         echo $lgo->getMessage();
    //         return false;
    //     }
    // }
    public function updatePassword()
    {
    }
}
