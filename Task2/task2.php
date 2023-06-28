<!DOCTYPE html>
<html>
<head>
    <title>Завдання 2: Математичні обчислення з GET</title>
</head>
<body>
    <h1>Завдання 2: Математичні обчислення з GET</h1>

    <form action="task2.php" method="GET">
        Введіть число a: <input type="text" name="a"><br>
        Введіть число b: <input type="text" name="b"><br>
        <input type="submit" value="Обчислити">
    </form>

    <?php
    if (isset($_GET['a']) && isset($_GET['b'])) {
        $a = intval($_GET['a']);
        $b = intval($_GET['b']);

        $sum = $a + $b;
        $product = $a * $b;
        $difference = $a - $b;
        $quotient = $b != 0 ? $a / $b : "Ділення на нуль";

        echo "<h2>Результати обчислень:</h2>";
        echo "<p>Сума: $sum</p>";
        echo "<p>Добуток: $product</p>";
        echo "<p>Різниця: $difference</p>";
        echo "<p>Частка: $quotient</p>";
    }
    ?>
</body>
</html>
