<div class="row mt-3">
    <h4 style="color: #a701bd">TỔNG QUAN</h4>
</div>
<div class="row">
    <?php foreach ($category as $value): ?>
        <div class="col-4 mt-3">
            <div class="card" style="width: auto;">
                <a href="index.php?page=view&id=<?php echo $value['id']; ?>"> <img src="images/<?php echo $value['image']; ?>" class="card-img-top" alt="..." style="height: 200px"></a>
                <div class="card-body">
                    <h5><a class="text"
                           href="index.php?page=view&id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>
                    </h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


</div>
