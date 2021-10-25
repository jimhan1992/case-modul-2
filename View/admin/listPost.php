<div>
    <div>
        <div class="card-header">
            Danh sách sản phẩm
        </div>
        <div>
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?page=addPost">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <!--                        <th>STT</th>-->
                        <th>Title</th>
                        <!--                        <th>Summary</th>-->
                        <!--                        <th>Content</th>-->
                        <th>Category</th>
                        <th>User</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--                    title, slug, view_number, image,summary,content,category_id,user_id,date-->
                    <?php foreach ($posts as $value): ?>
                        <tr>
                            <!--                            <td>--><?php //echo $value['id']; ?><!--</td>-->
                            <td>
                                <a href="index.php?page=viewPost&id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
                            </td>
                            <!--                            <td>--><?php //echo $value['summary']; ?><!--</td>-->
                            <!--                            <td>--><?php //echo $value['content']; ?><!--</td>-->
                            <td><?php echo $value['category_id']; ?></td>
                            <td><?php echo $value['user_id']; ?></td>
                            <td><?php echo $value['date']; ?></td>

                            <td>
                                <a class="btn btn-outline-danger"
                                   href="index.php?page=deletePost&id=<?php echo $value["id"]; ?>">Delete</a>
                                <a class="btn btn-outline-warning"
                                   href="index.php?page=editPost&id=<?php echo $value["id"]; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>