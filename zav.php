<?php
session_start();
if ($_SESSION['login']) {

	if (isset($_POST['zav_num'])) {
		$zav_num = $_POST['zav_num'];
	}
	if (isset($_POST['zav_text'])) {
		$zav_text = $_POST['zav_text'];
	}

	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));

	$query = "INSERT INTO `zav` (`zav_num`, `zav_text`) VALUES ('$zav_num','$zav_text')";
	$result = mysqli_query($link, $query);

	echo 'Заявка успешно оставлена';

	/* $query = "SELECT * FROM zav";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo 'Заявка ';
		echo $row['zav_num'] . ' ';
		echo $row['zav_text'] . '<br>';
	}*/
} else {
	echo 'Зарегистрирйтесь, чтобы оставлять заявки<br>';
	echo '<a href = "index.php">Вернитесь на главную</a><br>';
	echo '<a href = "news.php">Вернитесь на новости</a><br>';
} 
?>


