<h1><?php echo $post['title']; ?></h1>
<p><?php echo $post['user_id']; ?> - <?php echo $post['date']; ?></p>
<p><img src="images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>"></p>
<p><?php echo $post['content']; ?></p>
<?php
$postcontroller1 =new \Controller\PostController();
$postcontroller1->relatedPosts();
?>
