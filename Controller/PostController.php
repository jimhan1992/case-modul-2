<?php

namespace Controller;

use Model\DBconnection;
use Model\PostDB;

class PostController
{
    public $postDB;

    public function __construct()
    {
        $connection = new DBconnection("root", "");
        $this->postDB = new PostDB($connection->connect());
    }

    public function listPost()
    {
        $n = 1000;
        $posts = $this->postDB->getAll($n);
        include 'listPost.php';
    }

    public function listPost1()
    {
        $posts = $this->postDB->getAll();
        include 'view/client/listall.php';
    }

    public function add()
    {
//        title, slug, view_number, image,summary,content,category_id,user_id,date
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'pages/addPost.php';
        } else {
            $post['title'] = $_POST['title'];
            $post['slug'] = "";
            $post['view_number'] = "";
            $post['image'] = $_POST['image'];
            $post['summary'] = $_POST['summary'];
            $post['content'] = $_POST['content'];
            $post['category_id'] = $_POST['category_id'];
            $post['user_id'] = $_POST['user_id'];
            $post['date'] = $_POST['date'];
            $this->postDB->add($post);
            $message = 'ok';
            include 'view/add.php';
        }
    }

    public function deletePost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $posts = $this->postDB->getId($id);
            include 'deletePost.php';
        } else {
            $id = $_REQUEST["id"];
            $posts = $this->postDB;
            $posts->delete($id);

//            header('Location: index.php?page=listPost');
        }
    }

    public function view()
    {
        $id = $_GET['id'];
        $post = $this->postDB->getId($id);
        include 'View/client/view.php';
    }

    public function viewA()
    {
        $id = $_GET['id'];
        $post = $this->postDB->getId($id);
        include 'view.php';
    }

    public function editPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->getId($id);
            include 'editPost.php';
        } else {
            $id = $_POST['id'];
            $post['title'] = $_POST['title'];
            $post['content'] = $_POST['content'];
            $post['category_id'] = $_POST['category_id'];
            $post['date'] = $_POST['date'];
            $this->postDB->editPost($id, $post);
//            header('Location: index.php');
        }
    }

    public function search($key)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $this->postDB = new DBProduct();
            $search = $this->postDB->search($key);
            include 'View/client/searchPost.php';
        }
    }

    public function showCategory($key = 6)
    {
        $category = $this->postDB->showCategory($key);
        include 'View/client/listCategory.php';
    }

    public function listCategoryPost($key)
    {
//        $key=$_REQUEST["key"];
        $posts = $this->postDB->listCategoryPost($key);
        include 'View/client/listCategoryPost.php';
    }

    public function randPost()
    {
        $randPost = $this->postDB->randPost();
        include 'View/client/randPost.php';
    }

}