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
                <a href="#" class="active_a"><li class="active_li">Главная</li></a>
                <a href="#"><li>Обо мне</li></a>
                <a href="#"><li>Комментарии</li></a>
            </ul>
        </div>

        <div id="main">
            <aside id="sidebar-right">
                <!--<img src="../img/frame.png" alt="Фоторамка для таблицы"/>-->
                <table>
                    <tr>
                        <td>EUR/USD</td><td>1.3223</td>
                    </tr>
                    <tr>
                        <td>GBR/USD</td><td>9.354</td>
                    </tr>
                    <tr>
                        <td>USD/JPY</td><td>0.95862</td>
                    </tr>
                    <tr>
                        <td>USD/CHF</td><td>14.7849</td>
                    </tr>
                    <tr>
                        <td>AUD/USD</td><td>1.3223</td>
                    </tr>
                    <tr>
                        <td>USD/CAD</td><td>9.354</td>
                    </tr>
                    <tr>
                        <td>NZD/USD</td><td>0.95862</td>
                    </tr>
                    <tr>
                        <td>EUR/JPY</td><td>9.354</td>
                    </tr>
                    <tr>
                        <td>USD/RUB</td><td>51.58573</td>
                    </tr>
                    <tr>
                        <td>EUR/RUB</td><td>1.1</td>
                    </tr>
                </table>
            </aside>

            <?php Route::renderContent(); ?>
        </div>

        <div class="buffer"></div>

        <footer>
            <ul>
                <li>Инвестору</li>
                <!--<li>Условия</li>
                <li>Соглашения</li>
                <li>Тех. Поддержка</li>
                <li>Новости</li>
                <li>Контакты</li>-->
            </ul>
        </footer>
    </div>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="../js/comment.js"></script>
</body>
</html>