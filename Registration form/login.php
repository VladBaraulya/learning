<?php include('server.php') ?>
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 22.04.2019
 * Time: 12:01
 */
<!DOCTYPE html>
<html>
<head>
    <title>Страница для регистрации</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
    <h2>Вход</h2>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Имя пользовтеля</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Пароль</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Войти</button>
    </div>
    <p>
        Не зарегестрированны? <a href="register.php">Создать учётную запись</a>
    </p>
</form>
</body>
</html>
