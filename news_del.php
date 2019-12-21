<?php
session_start();

if (isset($_GET["id"])) {
        $id = $_GET["id"];
	}

if ($_SESSION['login'] == 'admin12345') {
	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));
	
	$query = "DELETE FROM article WHERE id=$id";
	$result = mysqli_query($link, $query);
	
	header("Location: news.php");
	
	/* echo '<a href="news.php">Обратно к новостям</a><br>';
	echo '<a href="index.php">Вернуться на главную</a>'; */
}
?>