<?php 
    session_start();   
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>АвтоПодбор: Отзывы</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
            <div class="nav">
                    <a href="index.php">Главная</a>
                    <a href="news.php">Новости и акции</a>
                    <a href="review.php">Отзывы</a>
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
                            echo '<a href="#" class="button">Оставить заявку</a>';
                        } else {
                            echo '<a href="registration.html" class="button">Зарегистрируйтесь,<br>
                            чтобы оставить заявку</a>';
                        }
                    ?>
            </div>
            <div class="content">
                <h3>Отзывы</h3>
                <div class="feedback">

                    <?php
                        if ($_SESSION['login']) {
                            echo '
                            <h5>Оставьте отзыв</h5>
                            <form action="">
                                <p>Выберите оценку:
                                    <input type="radio" name="points" value="1"> 1
                                    <input type="radio" name="points" value="2"> 2
                                    <input type="radio" name="points" value="3"> 3
                                    <input type="radio" name="points" value="4"> 4
                                    <input type="radio" name="points" value="5"> 5
                                </p>    
                                    <textarea name="feedback"></textarea><br>
                                    <input type="submit" id="submit1" value="Оставить отзыв">
                            </form>
                            <br clear="all">';
                        } else {
                            echo '<a href="registration.html" class="button">Зарегистрируйтесь,
                            чтобы оставить отзыв</a>';
                        }
                    ?>

                    <!-- <h5>Оставьте отзыв</h5>
                    <form action="">
                        <p>Выберите оценку:
                            <input type="radio" name="points" value="1"> 1
                            <input type="radio" name="points" value="2"> 2
                            <input type="radio" name="points" value="3"> 3
                            <input type="radio" name="points" value="4"> 4
                            <input type="radio" name="points" value="5"> 5
                        </p>    
                            <textarea name="feedback"></textarea><br>
                            <input type="submit" id="submit1" value="Оставить отзыв">
                    </form>
                    <br clear="all"> -->
                    
                </div>
                <div class="reviews">
                    <h5>Отзывы о нас</h5>
                    <h6>Средняя оценка: 4.5</h6>
                    <div class="rev">
                        <h6>Имя пользователя</h6>
                        <h6>Оценка: 5</h6>
                        <p>
                                Клиент просто счастлив!
                                Максимально оперативно и внимательно к клиенту, т.е. ко мне. :)
                                Настоятельно рекомендую, спасибо!
                                Всем советую обращаться.
                                Было оперативно найдено и проверено авто по всем тех. 
                                характеристикам, также была сторгована хорошая сумма!
                        </p>
                    </div>
                </div>
            </div>
    </body>
</html>