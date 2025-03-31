<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2)) {
        if ($num1 > $num2) {
            echo "The greater number is: " . $num1;
        } elseif ($num2 > $num1) {
            echo "The greater number is: " . $num2;
        } else {
            echo "Both numbers are equal.";
        }
    } else {
        echo "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compare Two Numbers</title>
</head>
<body>
    <form method="post">
        <label>Enter first number:</label>
        <input type="text" name="num1" required>
        <br>
        <label>Enter second number:</label>
        <input type="text" name="num2" required>
        <br>
        <input type="submit" value="Compare">
    </form>
</body>
</html>
