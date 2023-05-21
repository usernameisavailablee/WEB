<?php
session_start();
$answer4 = $_POST['answer4'];
$_SESSION['answer4'] = $answer4;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test6.php" method="post">
    <p>Вопрос5:</p>
    <p>что такое html?</p>
    <input type="text" name="answer5"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
