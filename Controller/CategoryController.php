<?php

namespace Controller;

use Model\CategoryModel;
use Model\DBconnection;

class CategoryController
{
    public $categoryModel;

    public function __construct()
    {
        $connection = new DBconnection("root", "");
        $this->categoryModel = new CategoryModel($connection->connect());
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'addCategory.php';
        } else {
            $post['name'] = $_POST['name'];
            $post['slug'] = "";
            $this->categoryModel->addCategory($post);
            include 'addCategory.php';
        }
    }

    public function listCategory()
    {
        $category = $this->categoryModel->listCategory();
        include 'listCategory.php';
    }

    public function listCategory1()
    {
        $category = $this->categoryModel->listCategory();
        include 'Core/navbar.php';
    }

    public function deleteCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $category = $this->categoryModel->getId($id);
            include 'deleteCategory.php';
        } else {
            $id = $_REQUEST["id"];
            $category = $this->categoryModel;
            $category->deleteCategory($id);
            echo "ok" . " <a href='index.php?page=listCategory'><button type='submit' class='btn btn-primary'>List</button></a>";
        }
    }

    public function editCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $category = $this->categoryModel->getId($id);
            include 'editCategory.php';
        } else {
            $id = $_POST['id'];
            $category = $_POST['name'];
            $this->categoryModel->editCategory($id, $category);
        }
    }

    public function getAllCategory()
    {
        $category = $this->categoryModel->getAllCategory();
        echo "<select class='custom-select' name='category_id'>";
        foreach ($category as $value) {
            echo "<option class='form-control' value='" . $value["name"] . "'>" . $value["name"] . "</option> ";
        }
        echo "</select>";
    }
}