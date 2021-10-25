<?php
session_start();
use Controller\UserController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once "../../Model/DBconnection.php";
    include_once "../../Model/UserModel.php";
    include_once "../../Controller\UserController.php";
$_SESSION["username"] = $_REQUEST["username"];
    $loginController = new UserController();
    $loginController->login($_REQUEST);
}

?>



<!DOCTYPE html>
<html lang="">
<head>
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


</head>
<body>
<div class="container d-flex justify-content-center pt-5" >
    <div class="col-12 col-md-6 ">

        <div class="card">
            <div class="panel-heading">
                <h2 class="text-center">Login</h2>
            </div>
            <form method="post">
                <div class="card-body">
                    <div class="col-12 col md-6">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input required type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input required type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                        <a class="btn btn-success" href="register.php">Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
