<?php

namespace Model;

use PDO;
use PDOException;

class DBconnection
{
    public $user;
    public $password;

    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=blog", $this->user, $this->password);

        } catch (PDOException $PDOException) {
            echo "database error";
            exit();
        }
    }

}