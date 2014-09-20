<?php $articles = Model::readMainPage(); ?>
<div id="slider">
    <!--<img src="../img/slider.png" alt="Картинка для слайдера"/>-->
    <div class="team">
        <p>Заработок с</p><p>Ufinance</p>
    </div>
    <div class="next_image">
        <img src="../img/nextleft.png" alt="Листание влево"/>
        <img src="../img/nextright.png" alt="Листание вправо"/>
    </div>

    <? /*foreach ($articles as $article): ?>
        <h2><?php echo $article->title1; ?></h2>
        <h3><?php echo $article->title2; ?></h3>
        <p>
            <?php echo $article->article; ?>
        </p>
    <? endforeach; */?>
</div>

<div id="content">
    <div class="clearfix">
        <ul class="about_company">
            <li class="article_title">О компании</li>
           <!-- <li><img src="../img/solid_line.png" alt=""/></li>-->
            <li class="article article_first">На сегодняшний день "Ufinance" - одна из ведущих компаний, предлагающих форекс- трейдинг.</li>
            <li class="article article_notfirst">Безупречная репутация, клиентоориентированность и инновационный подход к развитию бизнеса позволили компании твердо занять свою нишу.</li>
            <li class="article article_notfirst">Брокерская компания "Ufinance" специализируется на предоставлении услуг в сфере интернет-трейдинга и инвестиций.</li>
        </ul>
        <ul class="news">
            <li class="article_title ">Новости</li>
            <li class="article article_first"><img src="../img/news_img.png" alt="Миниатюра изображения для новостей"/><p class="imgcomment">Добавьте краткий анонс, заголовки, а также новости.</p></li>
            <li class="article article_notfirst"><img src="../img/news_img.png" alt="Миниатюра изображения для новостей"/><p class="imgcomment">Добавьте краткий анонс, заголовки, а также новости.</p></li>
            <li class="article article_notfirst"><img src="../img/news_img.png" alt="Миниатюра изображения для новостей"/><p class="imgcomment">Добавьте краткий анонс, заголовки, а также новости.</p></li>
        </ul>
        <ul class="persents">
            <li class="article_title">Проценты на сегодня</li>
            <li class="article article_first"><img src="../img/persent_logo.png" alt="Миниатюра изображения"/><p class="imgcomment">Процента заработали наши кленты за сегодня предоставлении услуг в сфере интернет-трейдинга и инвестиций.</p></li>
            <li class="article article_notfirst"><p>Чтобы зарабатывать вместе с нами и увеличить свои сбережения, <a href="#" class="a_reg">зарегистрируйтесь</a> у нас на сайте.</p></li>
            <li class="article article_notfirst"><p>С нами Вы можете получать <span class="bold">до 11% в сутки</span>. Что в 2 раза больше, чем годовая прибыль в банке.</p></li>
        </ul>
    </div>
    <div>
        <a href="#" class="next">Далее</a>
    </div>
</div>