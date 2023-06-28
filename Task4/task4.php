<!DOCTYPE html>
<html>
<head>
    <title>Завдання 4: Обробка рядків з POST</title>
</head>
<body>
    <h1>Завдання 4: Обробка рядків з POST</h1>

    <form action="task4.php" method="POST">
        Введіть рядок e: <input type="text" name="e"><br>
        Введіть рядок f: <input type="text" name="f"><br>
        <input type="submit" value="Виконати">
    </form>

    <?php
    if (isset($_POST['e']) && isset($_POST['f'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];

        echo "<h2>Результати обробки рядків:</h2>";
        echo "<p>Виведення першого, потім другого рядків:</p>";
        echo "<p>$e $f</p>";

        echo "<p>Виведення другого, потім першого рядків:</p>";
        echo "<p>$f $e</p>";
    }
    ?>
</body>
</html>
