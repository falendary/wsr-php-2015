<?php
	header("Content-type: text/html; charset=utf-8");
    session_start();

    isset($_SESSION["user_id"]) ? $active = '' : $active = 'active';
    isset($_SESSION["user_id"]) ? $authed = 'authed' : $authed = '';

    $link = new mysqli('localhost', 'root', '', 'wsr2015');
    $link->set_charset("utf8");

    if (isset($_GET["qid"])) {
    	$sql = "SELECT * FROM questions WHERE question_id = ".$_GET["qid"]; 
   		$result = $link->query($sql);
    	$row = $result->fetch_assoc();

    	$sqlUsr = "SELECT * FROM users where user_education = '".$row['question_type']."'";
    	$resultUsr = $link->query($sqlUsr);
    	$usrArray = array();

    	while ($rowUsr = $resultUsr->fetch_assoc()) {
    		array_push($usrArray, $rowUsr);
    	}
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
      <div class="wrapper">
          <a class="logout-btn" href="logout.php">Выйти</a>
          <ul class="education-list">
              <li><a href="/rezult/index.php?intermediate=true" class="intermediate btn">СРЕДНЕЕ</a></li>
              <li><a href="/rezult/?upperintermediate=true" class="upper-intermediate btn">СРЕДНЕСПЕЦИАЛЬНОЕ</a></li>
              <li><a href="/rezult/?high=true" class="high btn">ВЫСШЕЕ</a></li>
          </ul>

         	<p>
         		Вопрос:<?=$row["question_text"]?>
         	</p>
         	<ul>
         	<?php foreach ($usrArray as $user) { ?>
         		<li class="user-item"
         			data-user-name="<?=$user["user_name"]?>"
         			data-user-nickname="<?=$user["user_nickname"]?>"
         			data-user-middlename="<?=$user["user_middlename"]?>"
         			data-user-lastname="<?=$user["user_lastname"]?>"
         			data-user-phone="<?=$user["user_phone"]?>"
         			data-user-email="<?=$user["user_email"]?>"
         			data-user-education="<?=$user["user_education"]?>"
         			data-user-status="<?=$user["user_status"]?>">
         			<a href="#" class="usr"><?=$user["user_name"]?></a>
         		</li>
         	<?php }?>
         	</ul>
      </div>
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
    <div class="modal-detail">
        <form action="">
            <a href="#" class="close">x</a>
			<table>
				<tr>
					<td>Имя</td>
					<td class="td-name"></td>
				</tr>
				<tr>
					<td>Фамилия</td>
					<td class="td-lastname"></td>
				</tr>
				<tr>
					<td>Отчество</td>
					<td class="td-middlename"></td>
				</tr>
				<tr>
					<td>Ник</td>
					<td class="td-nickname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td class="td-email"></td>
				</tr>
				<tr>
					<td>Телефон</td>
					<td class="td-phone"></td>
				</tr>
				<tr>
					<td>Образование</td>
					<td class="td-education"></td>
				</tr>
				<tr>
					<td>Статус</td>
					<td class="td-status"></td>
				</tr>

			</table>
        </form>
    </div>
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/result.js"></script>
</body>
</html>