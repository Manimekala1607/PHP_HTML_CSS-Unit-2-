<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sales = [
        (float)$_POST["sale1"],
        (float)$_POST["sale2"],
        (float)$_POST["sale3"],
        (float)$_POST["sale4"]
    ];

    $total = array_sum($sales);
    $average = $total / count($sales);
    $highest = max($sales);
    $lowest = min($sales);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Sales Analysis Report</h1>

    <div class="result">

        <p>
            <strong>Month 1:</strong>
            ₹<?php echo number_format($sales[0], 2); ?>
        </p>

        <p>
            <strong>Month 2:</strong>
            ₹<?php echo number_format($sales[1], 2); ?>
        </p>

        <p>
            <strong>Month 3:</strong>
            ₹<?php echo number_format($sales[2], 2); ?>
        </p>

        <p>
            <strong>Month 4:</strong>
            ₹<?php echo number_format($sales[3], 2); ?>
        </p>

        <p>
            <strong>Total Sales:</strong>
            ₹<?php echo number_format($total, 2); ?>
        </p>

        <p>
            <strong>Average Sales:</strong>
            ₹<?php echo number_format($average, 2); ?>
        </p>

        <p>
            <strong>Highest Sales:</strong>
            ₹<?php echo number_format($highest, 2); ?>
        </p>

        <p>
            <strong>Lowest Sales:</strong>
            ₹<?php echo number_format($lowest, 2); ?>
        </p>

    </div>

    <a href="index.php" class="back">Analyze Again</a>

</div>

</body>
</html>