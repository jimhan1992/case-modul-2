<?php

namespace Model;

class UserModel
{
    public $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }

    public function  addUser($user){
        $sql = "INSERT INTO users(username, password, full_name,level) VALUES (?, ?, ?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $user['username']);
        $stmt->bindParam(2, $user['password']);
        $stmt->bindParam(3, $user['full_name']);
        $stmt->bindParam(4, $user['level']);
        return $stmt->execute();

    }
    function checkAccount($username, $password) {
        $sql = "SELECT COUNT(id) as 'SL' FROM users WHERE  username = :username AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function listUser()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}