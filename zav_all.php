<?php
session_start();
if ($_SESSION['login'] == 'admin12345') {
	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));

	$query = "SELECT * FROM zav";
	$result = mysqli_query($link, $query);

	if($result) {
							$rows = mysqli_num_rows($result); //количество строк 
							for ($i = 0; $i < $rows; ++$i) {
								$row = mysqli_fetch_row($result); 
								echo '<strong>Заявка: </strong>';//получаем строки
								echo "$row[1] ";
								/* echo ' <b>ID: </b>';
								echo "$row[0] "; */
								echo "<a href='zav_del.php?id=$row[0]'>Удалить</a>";
                                echo "<p>$row[2]</p>";
								/*echo "<p>
								<form action='zav_del.php' method='get'>
								<input type='submit' value='Удалить'>
								</form>
								</p>"; */
                                echo "<br>";
                                // вот тут написать для каждой строки запрос 
							}
							echo '<a href="index.php">Вернуться на главную</a>';
	}

	/*while ($row = mysqli_fetch_array($result)) {
		echo 'Заявка ';
		echo $row['zav_num'] . ' ';
		echo $row['zav_text'] . '<br>'; */
		
} 
?>