<h2><?php echo $title; ?></h2>

<?php foreach ($blogs as $blogs_item): ?>

        <h3><?php echo $blogs_item['title']; ?></h3>
        <div class="main">
                <?php echo $blogs_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('blogs/'.$blogs_item['slug']); ?>">View blog</a></p>

<?php endforeach; ?>