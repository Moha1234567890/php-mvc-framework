<?php require APPROOT . "/views/inc/header.php"; ?>
<h2><?php echo $data['title']; ?></h2>

<?php foreach($data['posts'] as $post) : ?>
    <h3><?php echo $post->title; ?></h3>
    <?php endforeach; ?>
<?php require APPROOT . "/views/inc/footer.php"; ?>