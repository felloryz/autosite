<?php

	session_start();

	if (isset($_POST["login_log"])) {
        $login_log = $_POST["login_log"];
    }
    if (isset($_POST["pass_log"])) {
        $pass_log = $_POST["pass_log"];
    }
	
	$sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") or die("Ошибка " . mysqli_error($link));// подключаемся к БД
	
	$query = "SELECT * FROM users WHERE login ='$login_log'";//создаем запрос
	$res = mysqli_query($link ,$query);//выполняем запрос
	
	if ($res){
		$row = mysqli_fetch_array($res);//вытаскиваем данные из запроса
		if ($row['login'] == "$login_log" && $row['password'] == "$pass_log"){
			$_SESSION['login'] = $login_log;
			echo "Вы успешно вошли";
			echo '<br>';
			echo '<a href ="index.php">Перейдите на главную<a>';
		}
		else{
			echo "Неверный логин или пароль<br>";
			echo "Вернитесь назад";
		}
	}
?>
