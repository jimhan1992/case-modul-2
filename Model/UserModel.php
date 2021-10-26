<?php

namespace Model;

class UserModel
{
    public $pdo;

    public function __construct($connection)
    {
        $this->pdo = $connection;
    }
    public function getId($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();

    }
    public function  addUser($user){
        $sql = "INSERT INTO users(username, password, full_name,level) VALUES (?, ?, ?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $user['username']);
        $stmt->bindParam(2, $user['password']);
        $stmt->bindParam(3, $user['full_name']);
        $stmt->bindParam(4, $user['level']);
        $stmt->execute();
        header("location: index.php?page=listUser");

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
    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id =$id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        header("location: index.php?page=listUser");
    }

    public function editUser($id, array $user)
    {
        $sql = "UPDATE users SET username = ?, password = ?, full_name = ? WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(1, $user['username']);
        $statement->bindParam(2, $user['password']);
        $statement->bindParam(3, $user['full_name']);
        $statement->bindParam(4, $id);
        $statement->execute();
        header("location: index.php?page=listUser");
    }


}