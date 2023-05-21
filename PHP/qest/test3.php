<?php
session_start();
$answer2 = $_POST['answer2'];
$_SESSION['answer2'] = $answer2;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test4.php" method="post">
    <p>Вопрос3:</p>
    <p>точно точно?</p>
    <input type="text" name="answer3"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
