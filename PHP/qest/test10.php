<?php
session_start();
$answer9 = $_POST['answer9'];
$_SESSION['answer9'] = $answer9;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="result.php" method="post">
    <p>Вопрос10:</p>
    <p>где хранятся куки?</p>
    <input type="text" name="answer10"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
