<?php

namespace Model;

class PostDB
{
    public $connection;

    /**
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    //hien thi tat ca bai viet theo N
    public  function getAll(){
        $sql = "SELECT * FROM posts ORDER BY id DESC ";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    //them bai viet
    public function  add($post){
        $sql = "INSERT INTO posts(title, slug, view_number, image,summary,content,category_id,user_id,date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $post['title']);
        $stmt->bindParam(2, $post['slug']);
        $stmt->bindParam(3, $post['view_number']);
        $stmt->bindParam(4, $post['image']);
        $stmt->bindParam(5, $post['summary']);
        $stmt->bindParam(6, $post['content']);
        $stmt->bindParam(7, $post['category_id']);
        $stmt->bindParam(8, $post['user_id']);
        $stmt->bindParam(9, $post['date']);
        $stmt->execute();
        header("location: index.php?page=listPost");
    }
    //lay bai viet theo id
    public function getId($id){
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();

    }
    // xoa bai viet
    public function delete($id){
        $sql = "DELETE FROM posts WHERE id =$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        header("location: index.php?page=listPost");
    }
    //sua bai viet
    public function editPost($id,$post){
//        title, slug, view_number, image,summary,content,category_id,user_id,date
        $sql = "UPDATE posts SET title = ?, content = ?, category_id = ?, date = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post['title']);
        $statement->bindParam(2, $post['content']);
        $statement->bindParam(3, $post['category_id']);
        $statement->bindParam(4, $post['date']);
        $statement->bindParam(5, $id);
        $statement->execute();
        header("location: index.php?page=listPost");
    }
    //kiem theo title
    public function search($key){
        $sql = "SELECT * FROM posts WHERE title LIKE N'%$key%'";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    //truy van voi dieu kien
    public function showCategory($key){
        $sql = "SELECT * FROM posts WHERE category_id = '$key' ORDER BY id DESC LIMIT 3";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function listCategoryPost($key){
        $sql = "SELECT * FROM posts WHERE category_id LIKE N'%$key%'  ORDER BY id DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function randPost(){
        $sql = "SELECT * FROM posts ORDER BY RAND() LIMIT 5";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function relatedPosts($category){
        $sql = "SELECT * FROM posts WHERE category_id = '$category' ORDER BY RAND() LIMIT 5";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}