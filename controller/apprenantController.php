<?php
require_once "./model/apprenantModel.php";

class apprenantController
{

    public $firstname;
    public $lastname;
    public $gender;
    public $age;
    public $year;

    public function SignUpComplet()
    {
        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['gender']) && isset($_POST['age']) && isset($_POST['year'])) {
            if (empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['gender']) && empty($_POST['age']) && empty($_POST['year'])) {
                echo "Enter the right parametre!!";
            } else {
                $completeUser = new apprenantModel();
                if ($completeUser->completeSignUp()) {
                    require_once "./view/profile.php";
                } else {
                    echo "Can't Complete the SignUp";
                }
            }
        } else {

            echo "DEFAUT INFO !!";
        }
    }
}
