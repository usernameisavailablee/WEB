<?php
session_start();
$answer6 = $_POST['answer6'];
$_SESSION['answer6'] = $answer6;
?>

<html>
<head>
    <title>Тестирование студента</title>
    <meta charset="utf-8"/>
</head>
<body>
<form action="test8.php" method="post">
    <p>Вопрос7:</p>
    <p>хост = узел?</p>
    <input type="text" name="answer7"/>
    <input type="submit" value="Далее"/>
</form>
</body>
</html>
