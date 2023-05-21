<html>
<head>
    <title>Вводи пароль</title>
    <meta charset="utf-8"/>
</head>
<body>
<?php
session_start();

// Проверяем, если пользователь заблокирован
if(isset($_SESSION['login_blocked']) && $_SESSION['login_blocked'] > time()) {
    echo "<p>Попытки авторизации исчерпаны. Пожалуйста, повторите попытку через 1 минуту.</p>";
    exit;
}

// Проверяем, если была ошибка авторизации
if(isset($_GET['error'])) {
    echo "<p>Вы ввели неверный пароль!</p>";
}
?>
<form action="authorize.php" method="post">
    Логин: <input type="text" name="user_name"><br>
    Пароль: <input type="password" name="user_pass"><br>
    <input type="submit" name="Submit" value="Войти">
</form>
</body>
</html>
