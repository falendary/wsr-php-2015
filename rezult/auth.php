<?php
	session_start();
	$link = new mysqli('localhost', 'root', '', 'wsr2015');
	$link->set_charset("utf8");

	if (isset($_POST["email"])) {	
		$user_email = htmlspecialchars($_POST["email"]);
		$user_password = htmlspecialchars($_POST["password"]);

		$sql = "SELECT * FROM users WHERE user_email = '".$user_email."' AND user_password = '".$user_password."'";

		$result = $link->query($sql);

		if ($row = $result->fetch_assoc()) {
			$_SESSION["user_id"] = $row["uid"];
		}
		echo json_encode(array('user_status' => 'authed'));
	}
?>