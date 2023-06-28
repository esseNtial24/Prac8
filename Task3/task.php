<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['c']) && isset($_POST['d'])) {
        $c = intval($_POST['c']);
        $d = intval($_POST['d']);

        if (is_int($c) && is_int($d)) {
            $sum = $c + $d;
            $product = $c * $d;
            $difference = $c - $d;

            if ($d != 0) {
                $quotient = $c / $d;
            } else {
                $quotient = "Ділення на нуль не можливе";
            }

            // Виведення результатів
            echo "Сума: " . $sum . "<br>";
            echo "Добуток: " . $product . "<br>";
            echo "Різниця: " . $difference . "<br>";
            echo "Частка: " . $quotient . "<br>";
        } else {
            echo "Введені значення повинні бути цілими числами.";
        }
    } else {
        echo "Не введено обидва значення 'c' і 'd'.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма для введення чисел</title>
</head>
<body>
    <form method="POST" action="task.php">
        <label for="c">Число C:</label>
        <input type="number" id="c" name="c" required><br>

        <label for="d">Число D:</label>
        <input type="number" id="d" name="d" required><br>

        <button type="submit">Обчислити</button>
    </form>
</body>
</html>
