<?php
	session_start();
	header("Content-type: text/html; charset=utf8");

	if(isset($_GET["utoken"]) && $_GET["utoken"] == $_SESSION["utoken"])
	{
		$link = mysqli_connect('localhost', 'root', '', 'wsr2015');
    	$link->set_charset("utf8");
    	if (mysqli_connect_errno()) {
		    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		    exit();
		}
    	$sqlTime = "SELECT user_registered FROM Users WHERE user_email = ".$_SESSION["user_email"];

    	if ($result = mysqli_query($link, $sqlTime)) {

    		echo $result;
    		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    			print_r($row);
    		}
    	}
    	$sql = "UPDATE Users SET user_status='активен' WHERE user_email =".$_SESSION["user_email"];
    	$link->query($sql);

    	echo "<h1>Спасибо, ваш аккаунт активирован</h1>";
    	echo "<a href='/'>Перейти на главную страницу</a>";
	} else {
		echo "Произошла ошибка";
		echo "<a href='/'>Перейти на главную страницу</a>";
	}

?>