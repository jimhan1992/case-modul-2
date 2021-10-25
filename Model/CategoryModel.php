<?php

namespace Model;

class CategoryModel
{
    public $connection;

    /**
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function  addCategory($post){
        $sql = "INSERT INTO categories(name,slug) VALUES (?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $post['name']);
        $stmt->bindParam(2, $post['slug']);
        $stmt->execute();
        header("location: index.php?page=listCategory");
    }
    public function listCategory(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getId($id){
        $sql = "SELECT * FROM categories WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function deleteCategory($id){
        $sql = "DELETE FROM categories WHERE id =$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        header("location: index.php?page=listCategory");
    }

    public function editCategory($id,$category)
    {
        $sql = "UPDATE categories SET name = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $category);
        $statement->bindParam(2, $id);
        $statement->execute();
        header("location: index.php?page=listCategory");
    }


    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}