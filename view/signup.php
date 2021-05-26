<!DOCTYPE html>
<?php
require_once("home.php"); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-white w-25 p-5 rounded-lg shadow-lg" style="font-size: 20px">
        <h2 class="text-center ">Sign Up</h2>
        <form>
            <div class="form-group row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputFullname1">Full Name</label>
                        <input type="text" class="form-control form-control-lg" id="exampleInputFullname1" aria-describedby="FullnameHelp" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group ">
                        <button type="submit" class="btn-lg btn-block  btn-dark">
                            Sign Up
                        </button>
                        <small class="text-right d-block">Already registred <a href="/login">login?</a></small>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<style>
    .rounded-lg {
        border-radius: 16px !important;
    }

    body {
        background: rgba(37, 85, 254, 255);
    }
</style>