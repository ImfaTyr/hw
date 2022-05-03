<?php
session_start();
$title='Личный кабинет';
require ('he/heading.php') ;
if ($_SESSION['user_name']   == "");
elseif ($_SESSION['user_email'] == "");
elseif ($_SESSION['user_pass'] ==""){;
echo 'Ещё не зарегестрированы!';} ?> <a href="reg.php"> Пройти регистрацию! </a> <br>
   <?php

echo 'Вас зовут: '.$_SESSION['user_name'];?> <br>
<?php echo 'Ваш E-mail: '.$_SESSION['user_email'];?><br>
<?php echo 'Ваш пароль: ))';?><br>
<?php
require ('he/ending.php');