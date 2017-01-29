<?php
error_reporting (E_ALL);
ini_set ('display_errors',1);
?>
<?php
$name ='Loginov Vladimir';
$userAge ='25';
$cityname ='Kazan';
$mailto ='Logwen@mail.ru';
$AboutMe ='Аспирант';
?>
<html lang="ru">
    <head>
        <title>Владимир – Аспирант</title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
        </style>
    <body>
	    <table border="5px">
        <h1>Страница пользователя Владимир</h1>
        <tr>
            <td>Имя</td>
            <td><?=$name ?></td>
        </tr>
        <tr>
            <td>Возраст</td>
            <td><?=$userAge ?></td>
        </tr>
        <tr>
            <td>Адрес электронной<br> почты</td>
            <td><a href="mailto:logwen@mail.ru"><?=$mailto ?></a></td>
        </tr>
        <tr>
            <td>Город</td>
            <td><?=$cityname ?></td>
        </tr>
        <tr>
            <td>О себе</td>
            <td><?=$AboutMe ?></td>
        </tr>
		</table>
    </body>
</html>