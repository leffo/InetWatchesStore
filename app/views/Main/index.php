<h1>HELLO from <i>index.php</i>!</h1>
<p><?php echo "$name $age $status";?></p>
<?php foreach ($posts as $post): ?>
    <h3><?=$post->title; ?></h3>
<?php endforeach; ?>
