<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $prices = [
        (float)$_POST["price1"],
        (float)$_POST["price2"],
        (float)$_POST["price3"],
        (float)$_POST["price4"]
    ];

    $highest = max($prices);
    $lowest = min($prices);
    $total = array_sum($prices);
    $average = $total / count($prices);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Stock Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Stock Performance Report</h1>

    <div class="result">

        <p>
            <strong>Day 1 Price:</strong>
            ₹<?php echo number_format($prices[0], 2); ?>
        </p>

        <p>
            <strong>Day 2 Price:</strong>
            ₹<?php echo number_format($prices[1], 2); ?>
        </p>

        <p>
            <strong>Day 3 Price:</strong>
            ₹<?php echo number_format($prices[2], 2); ?>
        </p>

        <p>
            <strong>Day 4 Price:</strong>
            ₹<?php echo number_format($prices[3], 2); ?>
        </p>

        <p>
            <strong>Highest Price:</strong>
            ₹<?php echo number_format($highest, 2); ?>
        </p>

        <p>
            <strong>Lowest Price:</strong>
            ₹<?php echo number_format($lowest, 2); ?>
        </p>

        <p>
            <strong>Average Price:</strong>
            ₹<?php echo number_format($average, 2); ?>
        </p>

    </div>

    <a href="index.php" class="back">Analyze Again</a>

</div>

</body>
</html>