<?php include('db/news/select-news-by-id.php') ?>
<h2><?= $row['id'] ?></h2>
<div class="row">

    <div class="form-group">
        <?= $row['text'] ?>
    </div>
</div>