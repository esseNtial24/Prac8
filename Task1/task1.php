<!DOCTYPE html>
<html>
<head>
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Суперглобальні змінні PHP</h1>

    <table>
        <tr>
            <th>Позначення Змінної</th>
            <th>Характеристика</th>
            <th>Отримане значення</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>Масив, що містить усі глобальні змінні PHP. Доступний з будь-якого місця в скрипті.</td>
            <td><?php var_dump($GLOBALS); ?></td>
        </tr>
        <tr>
            <td>$_SERVER</td>
            <td>Масив, що містить інформацію про сервер і середовище виконання PHP скрипта.</td>
            <td><?php var_dump($_SERVER); ?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Масив, що містить змінні, передані методом GET через URL.</td>
            <td><?php var_dump($_GET); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Масив, що містить змінні, передані методом POST через HTTP-запит.</td>
            <td><?php var_dump($_POST); ?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Масив, що містить інформацію про завантажені файли через HTTP-запит.</td>
            <td><?php var_dump($_FILES); ?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>Масив, що містить змінні, збережені в HTTP-кукі на клієнтській стороні.</td>
            <td><?php var_dump($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Масив, що містить змінні, збережені в сесії на серверній стороні.</td>
            <td><?php var_dump($_SESSION); ?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Масив, що містить змінні, передані методом GET, POST або COOKIE.</td>
            <td><?php var_dump($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Масив, що містить змінні середовища, передані PHP-сервером.</td>
            <td><?php var_dump($_ENV); ?></td>
        </tr>
    </table>
</body>
</html>
