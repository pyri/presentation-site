<?php
    $comments = Model::readComment();
    $countComments = Model::countComments();
?>

<div id="content">
    <div>
        <p class="error_block"></p>
    </div>
    <div class="desk inline-right">
        <div id="comment"></div>

        <?php $i=0;?>
        <?php foreach ($comments as $comment): ?>
            <?php $i++;?>
            <div id='msg-<?php echo $i;?>' class="msg border">
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
            <label for="author">Имя</label>
            <input type="text" id="author" placeholder="Введите свое имя" name="author" class="element-form font-vernara font-black">

            <label for="mail">Адрес электронной почты</label>
            <input type="text" id="mail" placeholder="Укажите свой e-mail" name="e-mail"
                   class="element-form font-vernara font-black">

            <label for="text">Ваше сообщение</label>
            <textarea id="text" name="text" placeholder="Текст сообщения" class="element-form font-vernara font-black"></textarea>

            <label for="captcha">Введите код с картинки:</label>
            <img src="/kcaptcha/index.php" alt="Текст с картинки"/>
            <input id="captcha" type="text" name="captcha" placeholder="Код с картинки" class="element-form font-vernara font-black"" />

            <input type="submit" id="send" class="btn font-vernara" name="send" value="Отправить"/>
        <form>
    </div>
</div>