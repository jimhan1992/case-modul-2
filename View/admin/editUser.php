<h2>Edit User</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $controller['id']; ?>"/>
    <div class="form-group">
        <label>User Name</label>
        <input type="text" name="username" value="<?php echo $controller['username']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $controller['password']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Full Name</label>
        <input name="full_name" class="form-control" value="<?php echo $controller['full_name']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php?page=listUser" class="btn btn-default">Cancel</a>
    </div>
</form>