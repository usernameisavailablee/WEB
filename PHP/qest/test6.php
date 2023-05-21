<?php
session_start();
$answer5 = $_POST['answer5'];
$_SESSION['answer5'] = $answer5;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test7.php" method="post">
    <p>Вопрос6:</p>
    <p>узел = хост?</p>
    <input type="text" name="answer6"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
