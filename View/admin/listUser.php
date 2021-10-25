<div class="">
    <div class="card">
        <div class="card-header">
            Danh sách người dùng
        </div>
        <div class="card-body">
            <div class="">
<!--                <a  type="submit" class="btn btn-success" href="index.php?page=addUser">ADD</a>-->
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Full Name</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($controller as $value): ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['username']; ?></td>
                            <td><?php echo $value['password']; ?></td>
                            <td><?php echo $value['full_name']; ?></td>

                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

