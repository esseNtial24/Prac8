<!DOCTYPE html>
<html>
<head>
    <title>Завдання 3: Математичні обчислення з POST</title>
</head>
<body>
    <h1>Завдання 3: Математичні обчислення з POST</h1>

    <form action="task3.php" method="POST">
        Введіть число c: <input type="text" name="c"><br>
        Введіть число d: <input type="text" name="d"><br>
        <input type="submit" value="Обчислити">
    </form>

    <?php
    if (isset($_POST['c']) && isset($_POST['d'])) {
        $c = intval($_POST['c']);
        $d = intval($_POST['d']);

        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $d != 0 ? $c / $d : "Ділення на нуль";

        echo "<h2>Результати обчислень:</h2>";
        echo "<p>Сума: $sum</p>";
        echo "<p>Добуток: $product</p>";
        echo "<p>Різниця: $difference</p>";
        echo "<p>Частка: $quotient</p>";
    }
    ?>
</body>
</html>
