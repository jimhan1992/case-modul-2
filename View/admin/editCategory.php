<h2>Edit post</h2>
<form method="POST" action="./index.php?page=editCategory">
    <input type="hidden" name="id" value="<?php echo $category['id']; ?>"/>
    <input name="name" value="<?php echo $category['name']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a class="btn btn-default" href="index.php?page=listCategory">Cancel</a>
    </div>
</form>