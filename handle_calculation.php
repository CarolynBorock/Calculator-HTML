<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>
<body>
    <h1>Calculation Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['number1']) && !empty($_POST['number2']) && isset($_POST['operation'])) {
            $num1 = (int)$_POST['number1'];
            $num2 = (int)$_POST['number2'];
            $operation = $_POST['operation'];

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<p>Error: Division by zero.</p>";
                    }
                    break;
                default:
                    echo "<p>Error: Unsupported operation.</p>";
            }

            echo "<p>The result is $result</p>";
        } else {
            echo "<p>Error: Please fill all the required fields.</p>";
        }
    } else {
        echo "<p>Error: Form not submitted.</p>";
    }
    ?>
    <a href="arithmetic.html">Go back to Calculator</a>
</body>
</html>
