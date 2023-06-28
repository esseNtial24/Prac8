<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = intval($_GET['a']);
    $b = intval($_GET['b']);

    if (is_int($a) && is_int($b)) {
        $sum = $a + $b;
        $product = $a * $b;
        $difference = $a - $b;

        if ($b != 0) {
            $quotient = $a / $b;
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
    echo "Не введено обидва значення 'a' і 'b'.";
}
?>

