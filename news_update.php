<?php
session_start();
?>
<head>
	<meta charset="utf-8">
	<title>Article</title>
	<style>
	textarea {
		width: 300px;
		height: 150px;
	}
	h2 {
		margin: 5px 0px;
	}
	</style>
</head>
<?php
if (isset($_GET["id"])) {
        $id = $_GET["id"];
	}
$_SESSION['id'] = $id;

if ($_SESSION['login'] == 'admin12345') {
	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));
	
	$query = "SELECT * FROM article WHERE id=$id";
	$result = mysqli_query($link, $query); 
	
	$row = mysqli_fetch_row($result);
	/*echo "<h2>$row[1]</h2><br>";
	echo "<textarea>$row[2]</textarea><br>"; */ ?>
	
	<form action="news_save.php" method="post">
		Title<br>
		<textarea type="text" name="title">
<?php
echo "$row[1]";
?>"</textarea>
<br>
		Text<br>
		<textarea type="text" name="article_text">
<?php
echo "$row[2]";
?>
</textarea><br>
		<input type="submit" value="Сохранить">
	</form>
	
	<a href="news.php">Обратно к новостям</a><br>
	<a href="index.php">Вернуться на главную</a>
<?php
}
?>