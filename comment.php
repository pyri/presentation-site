<?php
require_once("database.php");

$author = ($_POST['author']);
$mail = ($_POST['mail']);
$text = ($_POST['text']);

$data = array();
$message = '';

if (empty($author) or empty($mail) or empty($text)) {
    $data['status'] = 'error';
    $message = 'Заполните все поля. ';
}

if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $data['status'] = 'error';
    $message = $message . 'Укажите верный e-mail.';
}

$filter = array("<", ">", ";", "/");
$author = str_replace($filter, "|", $author);
$mail = str_replace($filter, "|", $mail);
$text = str_replace($filter, "|", $text);

if (!isset($data['status'])) {
    $date = date('Y-m-d');
    $result = Database::query("INSERT INTO comments (name, mail, text, data) VALUES ('$author', '$mail', '$text',CURDATE())");
    $data['status'] = 'ок';
    $data['author'] = $author;
    $data['mail'] = $mail;
    $data['date'] = $date;
    $data['text'] = $text;
    $message = 'Ваш комментарий добавлен. ';
}
$data['message'] = $message;
echo json_encode($data);
?>