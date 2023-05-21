<?php
session_start();

if(isset($_POST['Submit'])){
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    // Проверяем логин и пароль
    if($user_name === "cleo" && $user_pass === "password") {
        $_SESSION['logged_user'] = $user_name;
        header("Location: secretplace.php");
        exit;
    } else {
        // Увеличиваем счетчик неверных попыток
        if(!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 1;
        } else {
            $_SESSION['login_attempts']++;
        }

        // Проверяем количество попыток
        if($_SESSION['login_attempts'] >= 3) {
            // Блокируем доступ на 1 минуту
            $_SESSION['login_blocked'] = time() + 60;
            $_SESSION['login_attempts'] = 0; // Сбрасываем счетчик попыток
            header("Location: index.php?blocked=1");
            exit;
        } else {
            // Если попытки не исчерпаны, возвращаем пользователя на форму авторизации
            header("Location: index.php?error=1");
            exit;
        }
    }
}
?>
