<?php

use Controller\CategoryController;
use Controller\PostController;
use Controller\UserController;

include_once "Model/DBconnection.php";
include_once "Model/UserModel.php";
include_once "Controller/UserController.php";
include_once "Model/PostDB.php";
include_once "Controller/PostController.php";
include_once "Model/CategoryModel.php";
include_once "Controller/CategoryController.php";
$postcontroller = new PostController();
$category = new CategoryController();
include_once "Core/header.php";
//include_once "Core/navbar.php";
$category->listCategory1();
include_once "Core/banner.php";
?>


<div class="row">

    <div class="col-3">
        <div class="container">

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">Bài Đăng Ngẫu Nhiên</a>
                <?php $postcontroller->randPost(); ?>
            </div>
        </div>
    </div>
    <div class="col-9">
        <div class="container">
            <!--            --><?php //include_once "Core/banner.php"; ?>
            <?php
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
            switch ($page) {
                case "view":
                    $postcontroller->view();
                    break;
                case "viewn":
                    $n = $_REQUEST['n'];
                    $postcontroller->listPost1($n);
                    break;
                case "search":
                    $key = $_REQUEST['key'];
                    $postcontroller->search($key);
                    break;
                case "category":
                    $key = $_REQUEST["key"];
                    $postcontroller->showCategory($key);
                    break;
                case "listCategoryPost":
                    $key = $_REQUEST['key'];
                    $postcontroller->listCategoryPost($key);
                    break;
                default:
                    $postcontroller->showCategory("TỔNG QUAN");
                    $postcontroller->showCategory("OOP");
                    $postcontroller->listPost1();
                    break;
            }
            ?>
        </div>
    </div>

</div>


<?php include_once "Core/footer.php"; ?>


