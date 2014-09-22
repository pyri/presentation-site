<!doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Кипайкина К. - тестовое задание</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <header class="clearfix">
                <div class="logo">
                    <a href="/"><img src="../img/logo.png" alt="Логотип"/></a>
                </div>

                <div class="dotted_line">
                    <img src="../img/dotted_line.png" alt="Линия разделения областей"/>
                </div>
                <div class="slogan">
                    <p>Мы работаем для вашего результата!</p>
                </div>

                <div class="auth">
                    <a href="#">Авторизация / </a>
                    <a href="#">Регистрация</a>
                </div>
            </header>

            <div id="mainmenu">
                <ul>
                    <li><a href="/" class="<?php active(''); ?>">Главная</a></li>
                    <li><a href="/?page=about_me" class="<?php active('about_me'); ?>">Обо мне</a></li>
                    <li><a href="/?page=comment" class="<?php active('comment'); ?>">Комментарии</a></li>
                </ul>
            </div>

            <div id="main">
                <?php Route::renderContent(); ?>
            </div>
        </div>
        <footer>
            <div id="footer_inner">
                <ul>
                    <li><a href="#">Инвестору</a></li>
                    <li><a href="#">Условия</a></li>
                    <li><a href="#">Соглашения</a></li>
                    <li><a href="#">Тех. Поддержка</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </footer>
    </div>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="../js/comment.js"></script>
</body>
</html>