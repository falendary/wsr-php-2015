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

		$formFirstName = htmlspecialchars($data["formFirstName"]);
		$formNickName = htmlspecialchars($data["formNickName"]);
		$formMiddleName = htmlspecialchars($data["formMiddleName"]);
		$formLastName = htmlspecialchars($data["formLastName"]);
		$formPhone = htmlspecialchars($data["formPhone"]);
		$formEmail = htmlspecialchars($data["formEmail"]);
		$formEducation = htmlspecialchars($data["formEducation"]);

		$this->sql = "INSERT INTO users 
							(user_name, user_nickname, user_middlename,
							 user_lastname, user_phone, user_email,
							 user_education, user_password, user_status, user_registered) VALUES 
							('".$formNickName."', '".$formNickName."',
							 '".$formMiddleName."', '".$formLastName."',
							 '".$formPhone."', '".$formEmail."', 
							 '".$formEducation."', '".$this->password."',
							 'ожидает подверждения', NOW())";
		$_SESSION["utoken"] = rand(0, 99999);
		$_SESSION["user_email"] = $data["formEmail"];

		if ($this->link->query($this->sql)) {
			$message = "Спасибо за регистрацию, \n Ваш пароль: ".$this->password."\n"
			."Для активации аккаунта перейдите по <a href='validate.php"."?utoken=".$_SESSION["utoken"]."'>ссылке</a>";

			echo $message;
			mail($data["formEmail"], 'Активация аккаунта', $message);
		}
		$this->link->close();
	}
}