<?php
session_start();
$answer7 = $_POST['answer7'];
$_SESSION['answer7'] = $answer7;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test9.php" method="post">
    <p>Вопрос8:</p>
    <p>Имя + Отчество лектора?</p>
    <input type="text" name="answer8"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
