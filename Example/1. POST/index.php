<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php
if($_COOKIE['user'] == ''):
?>
<h2>Регистрация</h2>
<form action="check.php" method="post">
    Логин: <input type="text" name="login" id="login" placeholder="Введите логин"><br>
    Имя: <input type="text" name="name" id="name" placeholder="Введите имя"><br>
    Пароль: <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
    <input type="submit" value="Готово">
</form>
<h2>Авторизация</h2>
<form action="auth.php" method="post">
    Логин: <input type="text" name="login" id="login" placeholder="Введите логин"><br>
    Пароль: <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
    <input type="submit" value="Готово">
</form>
<?php else:?>
    <p><?=$_COOKIE['user']?><a href="exit.php">Выход</a></p>
<?php endif;?>
</body>
</html>
