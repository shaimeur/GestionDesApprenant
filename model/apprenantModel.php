<?php
require_once "./model/Manager.php";

class  apprenantModel extends Manager
{
    public function completeSignUp()
    {
        try {
            $req = $this->db->prepare("INSERT INTO apprenant(`firstname`,`lastename`,`gender`,`age`,`year`) VALUES (:firstname,:lastname,:gender,:age,:year)");
            $req->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
            $req->bindParam(':lastname', $_POST['lastname'], PDO::PARAM_STR);
            $req->bindParam(':gender', $_POST['gender'], PDO::PARAM_STR);
            $req->bindParam(':age', $_POST['age'], PDO::PARAM_INT);
            $req->bindParam(':year', $_POST['year'], PDO::PARAM_INT);
            $req->execute();
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
