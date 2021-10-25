<div id="main" class="container">
    <div class="product">
        <div class="row mt-3">
            <!--            <h4 style="color: #a701bd">New Posts</h4>-->
        </div>
        <div class="row mt-3">
            <?php foreach ($posts as $value): ?>

                <div class="col-3 mb-3">
                    <a href="index.php?page=view&id=<?php echo $value['id']; ?>"><img
                                src="images/<?php echo $value['image']; ?>"
                                alt="<?php echo $value['title']; ?>" style="width: 200px ;height: 120px"></a>
                </div>
                <div class="col-9 mb-3">
                    <div>
                        <h4><a class="text"
                               href="index.php?page=view&id=<?php echo $value['id']; ?>"><?php echo $value['title'] ?></a>
                        </h4>
                    </div>
                    <div class="text1 ellipsis">
                        <span class="text1-concat">
                            <?php echo $value['content'] ?>
                              </span>

                    </div>
                    <div class="dropdown-divider"></div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>