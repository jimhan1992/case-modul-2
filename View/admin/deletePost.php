<h1>Do you want to delete this post?</h1>

<h3><?php echo $posts['title']; ?></h3>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $posts['id']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php?page=listPost">Cancel</a>
    </div>
</form>