<h2>Edit post</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>"/>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $post['title']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"><?php echo $post['content']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Category</label><br>
        <?php use Controller\CategoryController;

        $category1 = new CategoryController();
        $category1->getAllCategory(); ?>
    </div>
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" value="<?php echo $post['date']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php?page=listPost" class="btn btn-default">Cancel</a>
    </div>
</form>