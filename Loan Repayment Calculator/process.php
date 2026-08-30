<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = (float)$_POST["amount"];
    $rate = (float)$_POST["rate"];
    $years = (int)$_POST["years"];

    // Convert annual rate to monthly rate
    $monthlyRate = $rate / 12 / 100;

    // Total number of months
    $months = $years * 12;

    // Calculate monthly payment
    if ($monthlyRate > 0) {
        $monthlyPayment = 
            $amount * $monthlyRate * pow(1 + $monthlyRate, $months)
            / (pow(1 + $monthlyRate, $months) - 1);
    } else {
        $monthlyPayment = $amount / $months;
    }

    $totalPayment = $monthlyPayment * $months;
    $totalInterest = $totalPayment - $amount;

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Loan Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Loan Repayment Result</h1>

    <div class="result">

        <p>
            <strong>Loan Amount:</strong>
            ₹<?php echo number_format($amount, 2); ?>
        </p>

        <p>
            <strong>Interest Rate:</strong>
            <?php echo $rate; ?>%
        </p>

        <p>
            <strong>Loan Period:</strong>
            <?php echo $years; ?> Years
        </p>

        <p>
            <strong>Monthly Payment:</strong>
            ₹<?php echo number_format($monthlyPayment, 2); ?>
        </p>

        <p>
            <strong>Total Repayment:</strong>
            ₹<?php echo number_format($totalPayment, 2); ?>
        </p>

        <p>
            <strong>Total Interest:</strong>
            ₹<?php echo number_format($totalInterest, 2); ?>
        </p>

    </div>

    <a href="index.php" class="back">Calculate Again</a>

</div>

</body>
</html>