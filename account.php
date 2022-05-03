<?php
session_start();
$title = 'Личный кабинет';
require ('he/heading.php');?>
<h1>Личный кабинет</h1>
<?php



 $user_name = htmlspecialchars(trim($_POST['name'])); // имя пользователя
$user_email = htmlspecialchars(trim($_POST['email'])); // почта пользователя
$user_pass = htmlspecialchars(trim($_POST['pass'])); // пароль

$_SESSION['user_name'] = $user_name;
$_SESSION['user_email'] = $user_email;
$_SESSION['user_pass'] = $user_pass;


$login = ['user_name'=>$_SESSION['user_name'],
    'user_email'=>$_SESSION['user_email'],
    'user_pass'=>$_SESSION['user_pass']];

if   (strlen((trim($_SESSION['user_name'])) == ""))
    echo 'Введите корректное имя ';

?>
<br>
<?if   ((trim($_SESSION['user_email'])) == "") {
    echo 'Введите корректный Е-mail ';

?>
<br>
<?php
if   ((trim($_SESSION['user_pass'])) == "") {
    echo 'Введите корректный пароль ';}
else


$_COOKIE = $login;
print_r($_COOKIE);
?>
<?echo 'Вас зовут: '.$_SESSION['user_name'];?> <br>
<?echo 'Ваш E-mail: '.$_SESSION['user_email'];?><br>
<?echo 'Ваш пароль: я никому не скажу))';?><br>
<?php


*/require ('he/ending.php');