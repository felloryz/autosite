<?php 
    session_start();   
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>АвтоПодбор: Новости</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
            <div class="nav">
                    <a href="index.php">Главная</a>
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
                <div class="news">
                    <h3>Новости и акции</h3>
                    <div class="article-news">
                        <h5>Выбираете автомобиль?</h5>
                        <p>
                                Выбираете автомобиль? Мы вам поможем! 
                                Сделаем процесс выбора авто быстрым и приятным! Поможем избежать обмана, 
                                выберем для вас наилучший вариант, добьемся максимальной скидки! 
                                Окажем помощь при дальнейшей эксплуатации! Оставляйте комментарии :)
                        </p>
                                <?php
                                    if ($_SESSION['login'] == 'admin12345') {
                                       /* echo '<form>';
                                        echo '<textarea name="comments"></textarea><br>';
                                        echo '<input type="submit" id="submit" value="Оставить комментарий">';
                                        echo '</form>'; */
                                        echo '<a href="article.html" class="button">Админ может писать новости</a>';
                                    } /* else {
                                        echo '<a href="registration.html" class="button">Зарегистрируйтесь,
                                        чтобы оставлять комментарии</a>';
                                    } */
                                ?>
                        <br>
                        <!-- <div class="comment">
                            <h6>Имя пользователя — Время: 21:22</h6>
                            <p>Много текста для комментария</p>
                        </div> -->
                    </div>
                    <div class="article-news">
					<?php
						$sql_pass="fedor2005";
						$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
						or die("Ошибка " . mysqli_error($link));
						
						$query = "SELECT * FROM article";
						$result = mysqli_query($link, $query);
						if($result) {
							$rows = mysqli_num_rows($result); //количество строк 
							for ($i = 0; $i < $rows; ++$i) {
								$row = mysqli_fetch_row($result); //получаем строки
								echo "<h5>$row[1]</h5>";
                                echo "<p>$row[2]</p>";
                                // вот тут написать для каждой строки запрос 
							}
						}
						//mysqli_free_result($result);
						/* $query = "SELECT * FROM article WHERE id = 8";
						$result = mysqli_query($link, $query);
						while ($row = mysqli_fetch_array($result)) {
							echo $row['title'];
							echo $row['text'];
						} */
					?>
                </div>
                </div>
            </div>
    </body>
</html>
