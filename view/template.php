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
            <header>
                <div class="logo">
                    <img src="../img/logo.png" alt="Логотип"/>
                </div>

                <div class="dotted_line">
                    <img src="../img/dotted_line.png" alt="Линия разделения областей"/>
                </div>
                <div class="slogan">
                    <p>Мы работаем для вашего результата!</p>
                </div>

                <div class="auth">
                    <a href="#">Авторизация / Регистрация</a>
                </div>
            </header>

            <div id="mainmenu">
                <ul>
                    <a href="/"><li class="<?php active(''); ?>">Главная</li></a>
                    <a href="/?page=about_me"><li class="<?php active('about_me'); ?>">Обо мне</li></a>
                    <a href="/?page=comment"><li class="<?php active('comment'); ?>">Комментарии</li></a>
                </ul>
            </div>

            <div id="main">
                <?php Route::renderContent(); ?>
            </div><div class="buffer"></div>
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