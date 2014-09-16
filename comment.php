<?php
session_start();

require_once("database.php");
$author = ($_POST['author']);
$mail = ($_POST['mail']);
$text = ($_POST['text']);
$captcha = ($_POST['captcha']);

$data = array();
$message = '';

$checkCaptcha = false;
if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] === $captcha)
{
    $checkCaptcha = true;
}

if (!$checkCaptcha  && !empty($captcha)) {
    $data['status'] = 'error';
    $message = 'Код введен неверно. ';
    $data['type_error'] = 'captcha';
}

if (empty($author) or empty($mail) or empty($text) or empty($captcha)) {
    $data['status'] = 'error';
    $message = $message .'Заполните все поля. ';
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