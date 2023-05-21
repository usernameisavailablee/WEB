<?php
session_start();
$answer1 = $_POST['answer1'];
$_SESSION['answer1'] = $answer1;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test3.php" method="post">
    <p>Вопрос2:</p>
    <p>уверен?</p>
    <input type="text" name="answer2"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
