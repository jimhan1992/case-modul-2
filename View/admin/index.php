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
include "core/sidebar.php";

?>



<div class="content-container">

    <div class="container-fluid">
        <?php
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
                    case 'deleteUser':
                        $controller->deleteUser();
                        break;
                    case 'editUser':
                        $controller->editUser();
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


<?php include_once "core/footer.php";?>