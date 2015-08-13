<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();

    $active = 'active';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="workrea authed">
        <ul>
            <li><a href="/?intermediate=true" class="intermediate btn">СРЕДНЕЕ</a></li>
            <li><a href="/?upperintermediate=true" class="upper-intermediate btn">СРЕДНЕСПЕЦИАЛЬНОЕ</a></li>
            <li><a href="/?high=true" class="high btn">ВЫСШЕЕ</a></li>
        </ul>
    </div>

    <h1>Ну вот, пустота... нажмите F5</h1>

    <div class="overlay <?=$active?>"></div>
    <div class="modal-auth <?=$active?>">
        <form action="">
            <a href="#" class="close">x</a>
            <input type="text" placeholder="login" id="userLogin">
            <input type="password" placeholder="password" id="userPassword">
            <a href="#" class="button-submit">Войти</a>
        </form>
    </div>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/result.js"></script>
</body>
</html>