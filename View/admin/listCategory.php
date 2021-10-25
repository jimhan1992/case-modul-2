<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Category List
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?page=addCategory">Add Category</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Category Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($category as $value): ?>
                        <tr>
                            <td><?php echo $value['name']; ?></td>
                            <td><a href="index.php?page=deleteCategory&id=<?php echo $value["id"]; ?>"
                                   class="btn btn-danger btn-sm">Delete</a>
                                <a href="index.php?page=editCategory&id=<?php echo $value["id"]; ?>"
                                   class="btn btn-primary btn-sm">Update</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>