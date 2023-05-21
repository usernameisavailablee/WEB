<?php
session_start();

$answer10 = $_POST['answer10'];
$_SESSION['answer10'] = $answer10;

// Получаем ответы студента из сессии
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_SESSION['answer3'];
$answer4 = $_SESSION['answer4'];
$answer5 = $_SESSION['answer5'];
$answer6 = $_SESSION['answer6'];
$answer7 = $_SESSION['answer7'];
$answer8 = $_SESSION['answer8'];
$answer9 = $_SESSION['answer9'];
$answer10 = $_SESSION['answer10'];

// Вычисляем результаты тестирования
$score = 0;

if ($answer1 == "нет") {
    $score++;
}

if ($answer2 == "да") {
    $score++;
}

if ($answer3 == "да") {
    $score++;
}

if ($answer4 == "css") {
    $score++;
}
if ($answer5 == "язык разметки") {
    $score++;
}
if ($answer6 == "да") {
    $score++;
}

if ($answer7 == "нет") {
    $score++;
}

if ($answer8 == "Татьяна Александровна") {
    $score++;
}
if ($answer9 == "сервер") {
    $score++;
}

if ($answer10 == "клиент") {
    $score++;
}

// Очищаем сессию
session_unset();
session_destroy();
?>

<html>
<head>
    <title>Результаты тестирования</title>
    <meta charset="utf-8"/>
</head>
<body>
<h1>Результаты тестирования</h1>
<p>Вы ответили правильно на <?php echo $score; ?> вопрос(а/ов) из 10.</p>
</body>
</html>
