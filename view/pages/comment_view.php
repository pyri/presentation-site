<?php $comments = Model::readComment();
$countComments = Model::countComments();?>

<div class="content border">
    <div>
        <p class="error_block"></p>
    </div>
    <div class="desk inline-right">
        <div id="comment"></div>

        <?php foreach ($comments as $comment): ?>
            <div class="msg border">
                <p class="inline-right partition-dashed"><?php echo $comment->data; ?></p>

                <p class="inline-left partition-dashed"><?php echo $comment->name . " (" . $comment->mail . ")"; ?></p>

                <p class="msg-text inflow-left font-green"><?php echo $comment->text; ?></p>
            </div>
        <?php endforeach; ?>

        <?php $number = ceil($countComments / 3); ?>
        <?php while ($number != 0): ?>
            <div class="font-tnr">
                <?php if ($number == 1): ?>
                    <a href="/?page=comment"
                       class="page-link msg-pagenumber inline-right border-solid"><?php echo $number; ?></a>
                <?php else: ?>
                    <a href="/?page=comment&num=<?php echo $number; ?>"
                       class="page-link msg-pagenumber inline-right border-solid"><?php echo $number; ?></a>
                <?php endif; ?>
            </div>
            <?php $number--; ?>
        <?php endwhile; ?>
    </div>

    <div class="form">
        <form id="main-form" method="POST">
            <h2>Имя</h2>
            <input type="text" id="author" placeholder="Введите свое имя" name="author" class="font-vernara font-black">

            <h2>Адрес электронной почты</h2>
            <input type="text" id="mail" placeholder="Укажите свой e-mail" name="e-mail"
                   class="font-vernara font-black">

            <h2>Ваше сообщение</h2>
            <textarea id="text" name="text" placeholder="Текст сообщения" class="element-form font-vernara font-black"></textarea>

            <input type="submit" id="send" class="btn inline-right font-vernara" name="send" value="Отправить"/>

            <form>
    </div>
</div>