<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();

    isset($_SESSION["user_id"]) ? $active = '' : $active = 'active';
    isset($_SESSION["user_id"]) ? $authed = 'authed' : $authed = '';

    
    function getQuestions($questionType){
        $link = new mysqli('localhost', 'root', '', 'wsr2015');
        $link->set_charset("utf8");

        $sql = "SELECT * FROM questions WHERE question_type = '".$questionType."'";
        $result = $link->query($sql);

        $arrayResult = [];

        while($row = $result->fetch_assoc()) {
            array_push($arrayResult, $row);
        }

        return $arrayResult;
    }

    $questionArray = [];

    if (isset($_GET["intermediate"]) && $_GET["intermediate"] == 'true') {
        $questionArray = getQuestions("intermediate");
    } elseif (isset($_GET["upperintermediate"]) && $_GET["upperintermediate"] == 'true') {
        $questionArray = getQuestions("upperintermediate");
    } elseif (isset($_GET["high"]) && $_GET["high"] === 'true'){
        $questionArray = getQuestions("high");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="workrea <?=$authed?>">
        <a href="logout.php">Выйти</a>
        <ul>
            <li><a href="/rezult/index.php?intermediate=true" class="intermediate btn">СРЕДНЕЕ</a></li>
            <li><a href="/rezult/?upperintermediate=true" class="upper-intermediate btn">СРЕДНЕСПЕЦИАЛЬНОЕ</a></li>
            <li><a href="/rezult/?high=true" class="high btn">ВЫСШЕЕ</a></li>
        </ul>

        <ul>
            <?php foreach ($questionArray as $item) {?>
                <li><?=$item["question_text"]?> | <a 
                <?php 
                    if($item["answers"] != 0) { 
                        echo "href='/detail.php?qid=".$item["question_id"]."'";
                    }
                ?> ><?=$item["answers"]?></a></li>
            <?php }?>
        </ul>
    </div>

    <h1 class="emptyness <?=$active?>">Ну вот, пустота... нажмите F5</h1>

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