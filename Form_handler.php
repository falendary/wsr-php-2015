<?php

/**
* 
*/
class Form_handler 
{
	private $link;
	
	function __construct($link)
	{
		$this->link = $link;
	}

	public function insert($data)
	{
		// echo $data["formNickName"];

		$this->password = uniqid();

		$this->sql = "INSERT INTO users 
							(user_name, user_nickname, user_middlename,
							 user_lastname, user_phone, user_email,
							 user_education, user_password, user_status) VALUES 
							('".$data["formFirstName"]."', '".$data["formNickName"]."',
							 '".$data["formMiddleName"]."', '".$data["formLastName"]."',
							 '".$data["formPhone"]."', '".$data["formEmail"]."', 
							 '".$data["formEducation"]."', '".$this->password."',
							 'ожидает подверждения')";
		$_SESSION["utoken"] = rand(0, 99999);
		$_SESSION["user_email"] = $data["formNickName"];
		if ($this->link->query($this->sql)) {
			header("Content-type: text/html; charset=utf8");
			$message = "Спасибо за регистрацию, \n Ваш пароль: ".$this->password."\n"
			."Для активации аккаунта перейдите по <a href='validate.php"."?utoken=".$_SESSION["utoken"]."'>ссылке</a>";

			echo $message;
			mail($data["formEmail"], 'Активация аккаунта', $message);
		}
	}
}