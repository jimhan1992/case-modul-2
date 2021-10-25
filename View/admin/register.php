<?php
include_once "../../Model/DBconnection.php";
include_once "../../Model/UserModel.php";
include_once "../../Controller/UserController.php";
use Controller\UserController;
$adduser= new UserController();
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
                <h2 class="text-center">Register</h2>
            </div>
            <form method="post">
                <div class="card-body">
                    <div class="col-12 col md-6">
<!--                        --><?php //$adduser->addUser(); ?>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input required type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input required type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="full_name">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" name="full_name">
                        </div>
                        <button type="submit" class="btn btn-success">Register</button>
                        <a class="btn btn-success" href="login.php">Login</a>
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
</html>