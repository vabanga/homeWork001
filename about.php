<?php
$name = "Georgy";
$age = "18";
$mail = "gohavorsin@gmail.com";
$city = "Khabarovsk";
$textAboutMe = "Меня зовут Георгий, мне 18 лет и я живу в Хабаровске!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About me</title>
    <style>
        body {
            font-family: sans-serif;
        }

        dl {
            display: table-row;
        }

        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Страница пользователь Георгий</h1>
    <dl>
        <dt>Имя</dt>
        <dd><?php echo $name ?></dd>
    </dl>
    <dl>
        <dt>Возраст</dt>
        <dd><?php echo $age ?></dd>
    </dl>
    <dl>
        <dt>Адрес электронной почты</dt>
        <dd><a href="mailto:dfitiskin@gmail.com"><?php echo $mail ?></a></dd>
    </dl>
    <dl>
        <dt>Город</dt>
        <dd><?php echo $city ?></dd>
    </dl>
    <dl>
        <dt>О себе</dt>
        <dd><?php echo $textAboutMe ?></dd>
    </dl>
</body>
</html>