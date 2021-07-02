<?php
require_once("./model/usersModel.php");

class userController
{

    public $username;
    public $email;
    public $password;


    public function userSignup()
    {

        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
            if (empty($_POST['username']) && empty($_POST['email']) && empty($_POST['password'])) {
                echo "Enter the right parametre!!";
            } else {
                $newUser = new userModel();
                if ($newUser->creat()) {
                    require_once "./view/login.php";
                } else {
                    echo " Can't create an account!! ";
                }
            }
        } else {
            echo "DEFAUT INFO";
        }
    }

    public function userLogin()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {

            if (empty($_POST['email']) && empty($_POST['password'])) {
                echo "Enter a valide account";
            } else {
                $user = new userModel();
                $userData = $user->findByEmail($_POST['email']);
                if ($userData['password'] === $_POST['password']) {
                    $_SESSION["canLog"] = true;
                    require_once "./view/apprenant.php";
                } else {
                    require_once "./view/login.php";
                }
            }
        } else {
            echo "ACCOUNT NOT FOUND";
        }
    }


    public function userResetPassword()
    {
    }
}
