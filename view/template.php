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
                <p>Авторизация / Регистрация</p>
            </div>
        </header>

        <div id="mainmenu">
            <ul>
                <li class="active_li"><a href="#" class="active_a">Главная</a></li>
                <li><a href="#">Обо мне</a></li>
                <li><a href="#">Комментарии</a></li>
            </ul>
        </div>

        <div id="main">
            <aside id="sidebar-right">
                <img src="../img/frame.png" alt="Фоторамка для таблицы"/>
                <!--<ul>
                    <li class="partition-dashed"><a href="/">Главная</a></li>
                    <li class="partition-dashed"><a href="/?page=about_me">Обо мне</a></li>
                    <li><a href="/?page=comment">Комментарии</a></li>
                </ul>-->
            </aside>

            <?php Route::renderContent(); ?>
        </div>

        <footer>
            это три  ul :)

            <ul>
                <li>О компании</li>
                <li>На сегодняшний день...</li>
            </ul>
            <ul>
                <li>Новости</li>
                <li>На сегодняшний день...</li>
            </ul>
            <ul>
                <li>Проценты на сегодня</li>
                <li>На сегодняшний день...</li>
            </ul>
            <input type="button" name="next" value="Далее"/>
        </footer>
    </div>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="../js/comment.js"></script>
</body>
</html>