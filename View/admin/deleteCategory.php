<h1>Do you want to delete the category?</h1>

<h3><?php echo $category['name']; ?></h3>

<form action="index.php?page=deleteCategory" method="post">
    <input type="hidden" name="id" value="<?php echo $category['id']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php?page=listCategory">Cancel</a>
    </div>
</form>