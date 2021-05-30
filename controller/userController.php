<?php
class userController
{

    public function login()
    {
        echo "login method";
    }

    public function getHome()
    {
        return view("home");
    }
}
