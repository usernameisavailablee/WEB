<?php
session_start();
$answer8 = $_POST['answer8'];
$_SESSION['answer8'] = $answer8;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test10.php" method="post">
    <p>Вопрос9:</p>
    <p>где хранится сессия?</p>
    <input type="text" name="answer9"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
