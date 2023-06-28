<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['e']) && isset($_POST['f'])) {
        $e = $_POST['e'];
        $f = $_POST['f'];

        // Виведення першої, потім другої
        echo "Перша: " . $e . "<br>";
        echo "Друга: " . $f . "<br>";

        echo "<br>";

        // Виведення другої, потім першої
        echo "Друга: " . $f . "<br>";
        echo "Перша: " . $e . "<br>";
    } else {
        echo "Не введено обидва значення 'e' і 'f'.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма для введення рядків</title>
</head>
<body>
    <form method="POST" action="adm.php">
        <label for="e">Рядок E:</label>
        <input type="text" id="e" name="e" required><br>

        <label for="f">Рядок F:</label>
        <input type="text" id="f" name="f" required><br>

        <button type="submit">Виконати дії</button>
    </form>
</body>
</html>
