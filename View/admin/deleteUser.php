<h1>Do you want to delete this User?</h1>

<h3><?php echo $controller['username']; ?></h3>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $controller['id']; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php?page=listUser">Cancel</a>
    </div>
</form>