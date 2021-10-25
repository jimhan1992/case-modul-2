<?php foreach ($randPost as $value): ?>
    <a class="text nav-link" href="index.php?page=view&id=<?php echo $value['id']; ?>"><?php echo $value['title'] ?></a>
    <div class="dropdown-divider"></div>
<?php endforeach; ?>