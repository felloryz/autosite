<?php
	session_start();
	if ($_SESSION['login'] == 'admin12345') {

	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	}
	if (isset($_POST['article_text'])) {
		$article_text = $_POST['article_text'];
	}

	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));

	$query = "INSERT INTO `article` (`title`, `text`) VALUES ('$title','$article_text')";
	$result = mysqli_query($link, $query);

	$query = "SELECT * FROM article";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo $row['title'] . ' ';
		echo $row['text'] . '<br>';
	}

	} else {
		echo 'Вы не администратор';
	}
?>

<?php
	/* if (isset($_POST['title'])) {
		$title = $_POST['title'];
	}
	if (isset($_POST['article_text'])) {
		$article_text = $_POST['article_text'];
	}

	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") 
	or die("Ошибка " . mysqli_error($link));

	$query = "INSERT INTO `article` (`title`, `text`) VALUES ('$title','$article_text')";
	$result = mysqli_query($link, $query);

	$query = "SELECT * FROM article";
	$result = mysqli_query($link, $query);
	while ($row = mysqli_fetch_array($result)) {
		echo $row['title'] . ' ';
		echo $row['text'] . '<br>';
	} */
?>
