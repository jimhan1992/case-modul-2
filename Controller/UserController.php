<?php

namespace Controller;

use Model\DBconnection;
use Model\UserModel;

class UserController
{
    public $postDB;

    public function __construct()
    {
        $connection = new DBconnection("root", "");
        $this->postDB = new UserModel($connection->connect());
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include_once "addUser.php";
        } else
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user['username'] = $_POST['username'];
                $user['password'] = $_POST['password'];
                $user['full_name'] = $_POST['full_name'];
                $user['level'] = "";


                $patternName = "/^[A-Za-z0-9]{6,}$/";//tối thiểu 3 ký tự
                $patternPassword = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";//ít nhất một chữ cái, một số và một ký tự đặc biệt,tối thiểu tám ký tự
                $error = true;
                if (!preg_match($patternName, $user['username'])) {
                    echo("<p style='color: red'>Username tối thiểu 6 ký tự</p>");
                    $error = false;
                }
                if (!preg_match($patternPassword, $user['password'])) {
                    echo("<p style='color: red'>Password phải có ít nhất một chữ hoa, một số và một ký tự đặc biệt,tối thiểu tám ký tự </p>");
                    $error = false;
                }

                if ($error) {
                    $this->postDB->addUser($user);
                    echo "<p style='color: blue'>Đăng Ký Thành Công</p>";
//                header("location: listUser.php");
                }
            }
    }


    public function listUser()
    {
        $controller = $this->postDB->listUser();
        include 'listUser.php';
    }

    function login($request)
    {
        $username = $_SESSION['username'] = $request['username'];
        $password = $request['password'];
        $isAccountExits = $this->postDB->checkAccount($username, $password);
        if ($isAccountExits['SL'] != 0) {
            $_SESSION['isLogin'] = true;
            header('location: index.php');
        } else {

            echo "<p style='color: red'>Account not exist</p>";
        }
    }

    function logout()
    {
        $_SESSION['isLogin'] = false;
        header('location: login.php?page=logout');
    }
}