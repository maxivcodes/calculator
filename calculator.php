<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Division by zero error!";
    }
    return $a / $b;
}

function exponentiate($a, $b) {
    return pow($a, $b);
}

function percentage($a, $b) {
    return ($a / $b) * 100;
}

function sqrt_value($a) {
    return sqrt($a);
}

function log_value($a) {
    return log($a);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value1 = isset($_POST['value1']) ? floatval($_POST['value1']) : 0;
    $value2 = isset($_POST['value2']) ? floatval($_POST['value2']) : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    $result = 0;

    switch ($operation) {
        case 'add':
            $result = add($value1, $value2);
            break;
        case 'subtract':
            $result = subtract($value1, $value2);
            break;
        case 'multiply':
            $result = multiply($value1, $value2);
            break;
        case 'divide':
            $result = divide($value1, $value2);
            break;
        case 'exponentiate':
            $result = exponentiate($value1, $value2);
            break;
        case 'percentage':
            $result = percentage($value1, $value2);
            break;
        case 'sqrt':
            $result = sqrt_value($value1);
            break;
        case 'log':
            $result = log_value($value1);
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    header("Location: calculator.html?result=" . urlencode($result));
    exit();
}
?>
