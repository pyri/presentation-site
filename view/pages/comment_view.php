<?php
    $comments = Model::readComment();
    $countComments = Model::countComments();
?>

<div class="content">
    <div class="msg_for_user">
        <p class="info">Для отправки сообщения заполните форму:</p>
        <p class="error_block"></p>
    </div>
    <div class="desk">
        <div id="comment"></div>

        <?php $i=0;?>
        <?php foreach ($comments as $comment): ?>
            <?php $i++;?>
            <div id='msg-<?php echo $i;?>' class="msg">
                <p class="msg_data"><?php echo $comment->data; ?></p>

                <p class="msg_name"><?php echo $comment->name . " (" . $comment->mail . ")"; ?></p>

                <p class="msg_text"><?php echo $comment->text; ?></p>
            </div>
        <?php endforeach; ?>

        <?php $number = ceil($countComments / 3); ?>
        <?php while ($number != 0): ?>
            <div>
                <?php if ($number == 1): ?>
                    <a href="/?page=comment"
                       class="page-link msg-pagenumber"><?php echo $number; ?></a>
                <?php else: ?>
                    <a href="/?page=comment&num=<?php echo $number; ?>"
                       class="page-link msg-pagenumber"><?php echo $number; ?></a>
                <?php endif; ?>
            </div>
            <?php $number--; ?>
        <?php endwhile; ?>
    </div>

    <div class="form">
        <form id="main-form" method="POST">
            <label for="author">Имя</label>
            <input type="text" id="author" placeholder="Введите свое имя" name="author" class="element-form">

            <label for="mail">Адрес электронной почты</label>
            <input type="text" id="mail" placeholder="Укажите свой e-mail" name="e-mail"
                   class="element-form">

            <label for="text">Ваше сообщение</label>
            <textarea id="text" name="text" placeholder="Текст сообщения" class="element-form"></textarea>

            <label for="captcha">Введите код с картинки:</label>
            <img src="/kcaptcha/index.php" alt="Текст с картинки"/>
            <input id="captcha" type="text" name="captcha" placeholder="Код с картинки" class="element-form"" />

            <input type="submit" id="send" class="btn" name="send" value="Отправить"/>
        <form>
    </div>
</div>