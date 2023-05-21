<?php
session_start();
$answer3 = $_POST['answer3'];
$_SESSION['answer3'] = $answer3;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test5.php" method="post">
    <p>Вопрос4:</p>
    <p>где будешь стили писать?</p>
    <input type="text" name="answer4"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
