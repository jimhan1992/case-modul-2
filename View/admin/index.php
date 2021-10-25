<?php
session_start();

use Controller\CategoryController;
use Controller\PostController;
use Controller\UserController;

include_once "../../Model/DBconnection.php";
include_once "../../Model/UserModel.php";
include_once "../../Controller/UserController.php";
include_once "../../Model/PostDB.php";
include_once "../../Controller/PostController.php";
include_once "../../Model/CategoryModel.php";
include_once "../../Controller/CategoryController.php";


$loginStatus = $_SESSION['isLogin'];
if (!isset($loginStatus) || !$loginStatus) {
    header('location: login.php');
}
?>
<?php
include "core/header.php";
//include "core/navbar.php";

?>






<div class="sidebar-container">
    <div class="sidebar-logo">
        Hi ! <?php echo $_SESSION["username"] ;?>
    </div>
    <ul class="sidebar-navigation">
        <li class="header">Post</li>
        <li>
            <a href="index.php?page=addPost">
                <i class="fa fa-home" aria-hidden="true"></i> Add Post
            </a>
        </li>
        <li>
            <a href="index.php?page=listPost">
                <i class="fa fa-tachometer" aria-hidden="true"></i> List Post
            </a>
        </li>
        <li class="header">Category</li>
        <li>
            <a href="index.php?page=addCategory">
                <i class="fa fa-users" aria-hidden="true"></i> Add Category
            </a>
        </li>
        <li>
            <a href="index.php?page=listCategory">
                <i class="fa fa-cog" aria-hidden="true"></i> List Category
            </a>
        </li>
        <li class="header">User</li>
        <li>
            <a href="index.php?page=addUser">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Add User
            </a>
        </li>
        <li>
            <a href="index.php?page=listUser">
                <i class="fa fa-info-circle" aria-hidden="true"></i> List User
            </a>
        </li>
    </ul>
</div>

<div class="content-container">

    <div class="container-fluid">
        <?php
        //            include "core/header.php";
        include "core/navbar.php";

        ?>

        <!-- Main component for a primary marketing message or call to action -->
<!--        <div  class="jumbotron"></div>-->
        <div>
            <div class="col-12 col-md-12">

                <?php
                $controller = new UserController();
                $postcontroller = new PostController();
                $category = new CategoryController();
                $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
                switch ($page) {
                    case 'logout':
                        $controller->logout();
                        break;
                    case 'addUser':
                        $controller->addUser();
                        break;
                    case 'listUser':
                        $controller->listUser();
                        break;
                    case 'addCategory':
                        $category->addCategory();
                        break;
                    case 'listCategory':
                        $category->listCategory();
                        break;
                    case 'deleteCategory':
                        $category->deleteCategory();
                        break;
                    case 'editCategory':
                        $category->editCategory();
                        break;

                    case 'addPost':
                        $postcontroller->add();
                        break;
                    case 'listPost':
                        $postcontroller->listPost();
                        break;
                    case 'deletePost':
                        $postcontroller->deletePost();
                        break;
                    case 'editPost':
                        $postcontroller->editPost();
                        break;
                    case 'viewPost':
                        $postcontroller->viewA();
                        break;
                    default:
                        echo "2";
                        break;

                }
                ?>


            </div>

        </div>

    </div>
</div>

















<!--<div class="container">-->
<!--    <div class="row pt-2">-->
<!--        <div class="col-12 col-md-2">-->
<!--            <div class="list-group navbar-light bg-light">-->
<!--                <button type="button" class="list-group-item list-group-item-action active">-->
<!--                    <a href="#" class="brand-link">-->
<!--                        <img src="../../images/Admin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .3; width: 50px ">-->
<!--                        <br>-->
<!--                        <span class="brand-text font-weight-light" style="color: white">Hi ! --><?php //echo $_SESSION["username"] ;?><!--</span>-->
<!--                    </a>-->
<!---->
<!--                </button><hr style="border: 1px">-->
<!--            </div>-->
<!--                <div class="list-group navbar-light bg-light">-->
<!--                <button type="button" class="list-group-item list-group-item-action active">-->
<!--                    Danh mục-->
<!--                </button>-->
<!---->
<!---->
<!--                <div class="list-group">-->
<!--                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"-->
<!--                            aria-haspopup="true" aria-expanded="false">-->
<!--                        _________Bài viết_________-->
<!--                    </button>-->
<!--                    <div class="dropdown-menu  dropdown-menu">-->
<!--                        <a href="index.php?page=addPost">-->
<!--                            <button class="dropdown-item" type="button">Add</button>-->
<!--                        </a>-->
<!--                        <a href="index.php?page=listPost">-->
<!--                            <button class="dropdown-item" type="button">List</button>-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--            <div class="list-group navbar-dark bg-dark">-->
<!--                <div class="list-group">-->
<!--                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"-->
<!--                            aria-haspopup="true" aria-expanded="false">-->
<!--                        ______Chuyên Mục______-->
<!--                    </button>-->
<!--                    <div class="dropdown-menu  dropdown-menu">-->
<!--                        <a href="index.php?page=addCategory">-->
<!--                            <button class="dropdown-item" type="button">Add</button>-->
<!--                        </a>-->
<!--                        <a href="index.php?page=listCategory">-->
<!--                            <button class="dropdown-item" type="button">List</button>-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="list-group navbar-dark bg-dark">-->
<!---->
<!---->
<!---->
<!--                <div class="list-group">-->
<!--                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"-->
<!--                            aria-haspopup="true" aria-expanded="false">-->
<!--                        ______Người Dùng______-->
<!--                    </button>-->
<!--                    <div class="dropdown-menu  dropdown-menu">-->
<!--                        <a href="index.php?page=addUser">-->
<!--                            <button class="dropdown-item" type="button">Add</button>-->
<!--                        </a>-->
<!--                        <a href="index.php?page=listUser">-->
<!--                            <button class="dropdown-item" type="button">List</button>-->
<!--                        </a>-->
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>