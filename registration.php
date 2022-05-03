<?php
$title = "Регистрация";
require "he/heading.php";
?>


    <div class="container">
    <h1> Регистрация </h1>
        <form action="account.php" method="post">
<form action="baza.php" method="post">
    <h3> E-mail </h3>
    <input type="text" name="email" placeholder="Введите e-mail" class="form-control"> <br>
    <h3> Ф.И.О. </h3>
    <h3>Пароль</h3>
    <input type="text" name="pass" placeholder="Введите Пароль" class="form-control"> <br>
<input type="submit" VALUE="Продолжить">
</div>
</form>
<?php
require "he/ending.php";
?>