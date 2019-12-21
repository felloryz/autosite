<?php

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["login"])) {
        $login = $_POST["login"];
    }
    if (isset($_POST["pass1"])) {
        $password = $_POST["pass1"];
    }
	// $email = $_POST["email"];
	// $login = $_POST["login"];
	// $password = $_POST["pass1"];

    $sql_pass="fedor2005";
	$link = mysqli_connect("localhost", "u0879353_fedya", $sql_pass, "u0879353_autosite") or die("Ошибка " . mysqli_error($link));// подключаемся к серверу

	$email_valid = preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email) && preg_match("/(?:[a-zA-Z0-9])/i", $email);
	
	// $email_valid = preg_match("/^(?!.*@.*@.*$)(?!.*@.*\-\-.*\..*$)(?!.*@.*\-\..*$)(?!.*@.*\-$)(.*@.+(\..{1,11})?)$/", $email);
	
	$uppercase = preg_match('/[A-Z]+/', $password);
	$lowercase = preg_match('/[a-z]+/', $password);
	$number    = preg_match('/[0-9]+/', $password);
	$special = preg_match('/[%$#@&*^|\/~[]{}]+/',$password);
	$password_valid = $special && $uppercase && $lowercase && $number && strlen($password) > 8;
	$login_valid = preg_match('/[A-Za-z_]/', $login) && strlen($login) > 6;

	if ($password != $_POST["pass2"]) {
		echo "Пароли не совпадают";
		echo "<br>";
	}
	if(!$password_valid && $password!=$_POST["pass2"]) {
  		echo "Пароль слишком простой используйте 1 число, 1 букву верхнего регистра и 1 букву нижнего регистра. Длина пароля долна быть больше 8 символов";
  		echo "<br>";
	} 
	if (!$email_valid){
		echo "Адрес электронной почты введен не корректно";
		echo "<br>";
	}
	if (!$login_valid){
		echo "Логин введен не корректно";
		echo "<br>";
	}
	if (!$mail_valid && !$password_valid && !$login_valid)
	{
		echo "Вернитесь назад";
		exit();
	} 
	echo "Данные ведены верно";

	$query = "SELECT * FROM users WHERE email='$email'";//формируем запрос
	$res = mysqli_query($link ,$query);//задаем вопрос
	
	if ($res){
		$row = mysqli_fetch_array($res);//вытаскиваем данные из запроса
		if ($row['email'] == "$email" or $row['login'] == "$login"){
			echo "Аккаунт с таким адресом электронной почты/логином уже существует";
			echo "Вернитесь назад";
		} else {
			$query = "INSERT INTO users (email, login, password) VALUES ('$email','$login','$password')";
			$result = mysqli_query($link ,$query);
			if ($res){
				echo "<hr>";
				echo "Регистрация пройдена успешно";
				echo '<br>';
				echo "<a href='login.html'>Войти</a>";
			}	
		}
	}
	
?>
