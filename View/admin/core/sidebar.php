<div class="sidebar-container">
    <div class="sidebar-logo">
        Hi ! <?php echo $_SESSION["username"]; ?>
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
        <?php
        if($_SESSION['username']==="Admin"){
            echo '
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
        </li>';
        }
        ?>
    </ul>
</div>
