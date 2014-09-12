<?php
	require_once("database.php");
	
	$author = ($_POST['author']);
	$mail = ($_POST['mail']);
	$text = ($_POST['text']);	
	
	$data = array();
	
	if(empty($author) or empty($mail) or empty($text))
	{
		$data['status'] = 'error';
		$data['message'] = 'Введите верные данные.';	
	}
	
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$data['status'] = 'error';
		$data['message'] = 'E-mail указан НЕ верно.';
	}
	
	if (!isset($data['status']))
	{
		$date = date('Y-m-d');
		$result = Database::query("INSERT INTO comment (name, mail, text, data) VALUES ('$author', '$mail', '$text','$date')");
		$data['status'] = 'ок!';
		$data['author'] = $author;
		$data['mail'] = $mail;
		$data['date'] = $date;
		$data['text'] = $text;
	}

	echo json_encode($data);
?>