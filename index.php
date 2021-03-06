<?php
    error_reporting(E_ALL);
    session_start();
    header('Content-type: text/html; charset=utf-8;');

    include "Form_handler.php";

    // echo "<pre>";
    // print_r($_POST);

    $link = new mysqli('localhost', 'root', '', 'wsr2015');
    $link->set_charset("utf8");

    $handler = new Form_handler($link);

    if(isset($_POST['submited'])) {

        $validateSuccess = true;

        foreach ($_POST as $item) {
            if (empty($item)) {
                $validateSuccess = false;
                header("Location: index.php?validate=error");
            }
        }

        if ($validateSuccess) {
            $handler->insert($_POST);    
        }
        // header("Location: thank.php");
    }

    if (isset($_GET['validate']) && $_GET['validate'] == 'error') {
        $error = 'error';
    } else 
    {
        $error = '';
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <form action="index.php" class="form-complete" method="POST">
        <div>
            <label for="formNickName">Никнейм*</label>
            <input type="text" placeholder="Никнейм" name="formNickName" id="formNickName">
        </div>
        <div>
            <label for="formLastName">Фамилия*</label>
            <input type="text" placeholder="Фамилия" name="formLastName" id="formLastName">
        </div>
        <div>
            <label for="formFirstName">Имя*</label>
            <input type="text" placeholder="Имя" name="formFirstName" id="formFirstName">
        </div>
        <div>
            <label for="formMiddleName">Отчество*</label>
            <input type="text" placeholder="Отчество" name="formMiddleName" id="formMiddleName">
        </div>
        <div>
            <label for="formPhone">Мобильный телефон*</label>
            <input type="text" placeholder="Мобильный телефон" name="formPhone" id="formPhone">
        </div>
        <div>
            <label for="formEmail">E-mail*</label>
            <input type="email" placeholder="Е-майл" name="formEmail" id="formEmail">
        </div>
        <div>
            <select id="formEducation" name="formEducation">
                <option value="intermediate">Среднее</option>
                <option value="upperIntermediate">Среднеспециальное</option>
                <option value="high">Высшие</option>
            </select>
        </div>
        <div>
            <input type="checkbox" id="formAgreeLicence">
            <label for="formAgreeLicence">
                Я согласен с лицензионным соглашением
            </label>
        </div>
        <div>
            <input type="text" id="formCaptcha" name="formCaptcha">
            <img src="captcha.php" alt="">
        </div>
        <input type="hidden" name="submited" value="submited">
        <button id="submitForm" type="submit" class="submit-form-btn">Отправить</button>
        <h1 class="error-msg <?=$error?>">Ошибка формы</h1>
        </form>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>