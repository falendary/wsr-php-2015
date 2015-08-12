<?php
	session_start();
	header("Content-type: text/html; charset=utf8");

	if(isset($_GET["utoken"]) && $_GET["utoken"] == $_SESSION["utoken"])
	{
		$link = mysqli_connect('localhost', 'root', '', 'wsr2015');
    	$link->set_charset("utf8");

    	$sql = "UPDATE Users SET user_status='активен' WHERE user_email =".$_SESSION["user_email"];

    	echo "<h1>Спасибо, ваш аккаунт активирован</h1>";
    	echo "<a href='/'>Перейти на главную страницу</a>";
	} else {
		echo "Произошла ошибка";
		echo "<a href='/'>Перейти на главную страницу</a>";
	}

?>