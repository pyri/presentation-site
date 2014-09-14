<?php $articles = Model::readMainPage(); ?>
<div class="content border">
    <? foreach ($articles as $article): ?>
        <h2><?php echo $article->title1; ?></h2>
        <h3><?php echo $article->title2; ?></h3>
        <p>
            <?php echo $article->article; ?>
        </p>
    <? endforeach; ?>

</div>