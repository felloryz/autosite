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
								echo "$row[1]";
								echo " ";
                                echo "<p>$row[2]</p>";
                                echo "<br>";
                                // вот тут написать для каждой строки запрос 
							}
	}

	/*while ($row = mysqli_fetch_array($result)) {
		echo 'Заявка ';
		echo $row['zav_num'] . ' ';
		echo $row['zav_text'] . '<br>'; */
		
} 
?>
