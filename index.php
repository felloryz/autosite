<?php 
    session_start();   
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>АвтоПодбор: Главная</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h1>АвтоПодбор</h1>
            <h3>Подбор автомобиля под ключ</h3>

            <?php
                if ($_SESSION['login']) {
                    echo '<a href="zav.html" class="button">Оставить заявку</a>';
                } else {
                    echo '<a href="registration.html" class="button">Зарегистрируйтесь,<br>
                    чтобы оставить заявку</a>';
                }
            ?>

            <!-- <a href="#" class="button">Оставить заявку</a> -->

        </div>
        <div class="nav">
            <a href="#about">О нас</a>
            <a href="#service">Услуги</a>
            <a href="#price">Прайс</a>
            <!-- <a href="#contract">Договор</a> -->
            <a href="news.php">Новости и акции</a>
            <!-- <a href="review.php">Отзывы</a> -->

            <?php
                if ($_SESSION['login']) {
                    echo '
                        <a href="logout.php" style="float:right" class="nav-right">Выйти</a>
                        <a href="#" style="float:right">Здравствуйте, '. $_SESSION['login'].'</a>';
                } else {
                    echo '
                        <a href="registration.html" style="float:right" class="nav-right">Зарегистрироваться</a>
                        <a href="login.html" style="float:right">Войти</a>';
                }
            ?>

            <?php
                if ($_SESSION['login'] == 'admin12345') {
                    echo '<a href="zav_all.php">Заявки</a>';
                } 
            ?>

            <!-- <a href="registration.html" style="float:right" class="nav-right">Зарегистрироваться</a>
            <a href="login.html" style="float:right">Войти</a> -->

        </div>
        <div class="sidebar">
            <b>АвтоПодбор</b>
            <p>Контакты</p>
            <ul>
                <li>Рыжов Фёдор</li>
                <li>Телефон +7 985 621 44 10</li>
                <li>Email fed-rizh@yandex.ru</li>
            </ul>

            <?php
                if ($_SESSION['login']) {
                    echo '<a href="zav.html" class="button">Оставить заявку</a>';
                } else {
                    echo '<a href="registration.html" class="button">Зарегистрируйтесь,<br>
                    чтобы оставить заявку</a>';
                }
            ?>

            <!-- <a href="#" class="button">Оставить заявку</a> -->

        </div>
        <div class="content">
            <a name="about"></a><br>
            <div class="about">
                <h3>Немного о нас</h3>
                <div class="gallery">
                    <img src="img/img_1.jpg" alt="">
                    <div class="desc"><span>Тщательная проверка</span><br>Проверяем по более чем 100 параметрам, используя самое современное оборудование.</div>
                </div>
                <div class="gallery">
                    <img src="img/img_2.jpg" alt="">
                    <div class="desc"><span>Проверка документов</span><br>Выявляем уловки недобросовестных продавцов, нас не обмануть.</div>
                </div>
                <div class="gallery">
                    <img src="img/img_3.jpg" alt="">
                    <div class="desc"><span>Юридическая проверка</span><br>Проводим юридическую проверку по базам ГИБДД и БКИ.</div>
                </div>
                <div class="gallery">
                    <img src="img/img_4.jpg" alt="">
                    <div class="desc"><span>Честная констультация</span><br>Встертимся и обсудим все интересующие вопросы и нюансы.</div>
                </div>
                <div class="gallery">
                    <img src="img/img_5.jpg" alt="">
                    <div class="desc"><span>Большой опыт</span><br>Более 250 подобранных автомобилей.</div>
                </div>
                <br clear="all">
            </div>
            <a name="service"></a><br>
            <div class="service">
                <h3>Наши услуги</h3>
                <div class="frame">
                    <div class="block">Автоподбор под ключ</div>
                    <div class="desc">Учитывая все желания заказчика, находим и проверяем автомобиль. После помогаем оформить документы для покупки.</div>
                </div>
                <div class="frame">
                    <div class="block">Проверка одного автомобиля</div>
                    <div class="desc">Проводим самую полную проверку автомобиля. Кузов, ходовая часть, пробег и т.д. Даём рекомендации заказчику.</div>
                </div>
                <div class="frame">
                    <div class="block">Автоэксперт на день</div>
                    <div class="desc">Полная проверка автомобилей, выбранных Вами в течение одного дня.</div>
                </div>
                <div class="frame">
                    <div class="block">Компьютерная диагностика автомобиля</div>
                    <div class="desc">Проверяем все электронные системы с помощью профессионального оборудования, в том числе реальный пробег.</div>
                </div>
                <div class="frame">
                    <div class="block">Подбор нового автомобиля у дилера</div>
                    <div class="desc">Выбираем модели по критериям клиента. Находим самое выгодное предложение. Помогаем в обслуживании у дилера.</div>
                </div>
                <div class="frame">
                    <div class="block">Сопровождение при регистрации ТС в ГАИ</div>
                    <div class="desc">Помогаем подготовить необходимые документы, после чего проводим регистрацию.</div>
                </div>
                <div class="frame">
                    <div class="block">Автострахование КАСКО и ОСАГО</div>
                    <div class="desc">У нас много страховых компаний-партнеров. Предложим Вам самую выгодную цену.</div>
                </div>
                <br clear="all">
            </div>
            <a name="price"></a><br>
            <div class="price">
                <h3>Сколько стоит подбор</h3>
                <table class="pricelist">
                    <tr>
                      <th>Автомобиль</th>
                      <th>Стоимость подбора</th>
                      <th></th>
                    </tr>
                    <tr>
                      <td>До 500 000</td>
                      <td>12 500 + 50% от торга</td>
                      <td>или 20 000 + торг бесплатно</td>
                    </tr>
                    <tr>
                      <td>До 800 000</td>
                      <td>14 500 + 50% от торга</td>
                      <td>или 24 000 + торг бесплатно</td>
                    </tr>
                    <tr>
                      <td>До 1 000 000</td>
                      <td>17 500 + 50% от торга</td>
                      <td>или 26 000 +торг бесплатно</td>
                    </tr>
                    <tr>
                      <td>До 1 500 000</td>
                      <td>19 500 + 50% от торга</td>
                      <td>или 34 000 + торг бесплатно</td>
                    </tr>
                    <tr>
                        <td>До 2 000 000</td>
                        <td>24 500 + 50% от торга</td>
                        <td>или 40 000 + торг бесплатно</td>
                    </tr>
                  </table>
                  <br clear="all">
            </div>
            <a name="contract"></a><br>
            <!-- <div class="contract">
                    <h3>Ознакомьтесь с нашим договором</h3>
                    <form class="dogovor">
                        <label for="fname">Полное имя</label><br>
                        <input type="text" id="name" name="name"><br>
                        <label for="lname">Электронная почта или номер телефона</label><br>
                        <input type="password" id="email-phone" name="email-phone"><br>
                        <input type="submit" id="submit" value="Скачать договор">
                    </form>
                    <br clear="all">
            </div> -->
        </div>
        <div class="footer">
            <p>Рыжов Фёдор для ИУ4</p>
        </div>
    </body>
</html>
