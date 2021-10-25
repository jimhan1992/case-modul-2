<form method="post">
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Thumbnail</label><br>
        <input type="file" name="image" id="fileToUpload">
    </div>

    <div class="form-group">
        <!--        <label>Teaser</label>-->
        <input type="hidden" name="summary" class="form-control">
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea rows=20 name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Category</label><br>
        <?php use Controller\CategoryController;

        $category1 = new CategoryController();
        $category1->getAllCategory(); ?>
    </div>
    <label></label>
    <input type="hidden" name="user_id" class="form-control" value="<?php echo $_SESSION["username"] ?>"/>
    <div class="form-group">
        <label>Created</label>
        <input type="date" name="date" class="form-control"/>
    </div>

    <div class="form-group">
        <input type="submit" value="Create" class="btn btn-primary"/>
        <a href="./index.php?page=listPost" class="btn btn-default">Cancel</a>
    </div>
</form>