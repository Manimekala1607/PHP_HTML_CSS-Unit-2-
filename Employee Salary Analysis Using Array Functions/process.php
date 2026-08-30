<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $salary = (int)$_POST["salary"];

    // Employee salary array
    $salaries = [
        "Employee 1" => 30000,
        "Employee 2" => 45000,
        "Employee 3" => 40000,
        $name => $salary
    ];

    $highest = max($salaries);
    $lowest = min($salaries);
    $average = array_sum($salaries) / count($salaries);

} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Salary Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Employee Salary Report</h1>

    <table>
        <tr>
            <th>Employee</th>
            <th>Salary</th>
        </tr>

        <?php foreach ($salaries as $employee => $amount) { ?>
        <tr>
            <td><?php echo htmlspecialchars($employee); ?></td>
            <td>₹<?php echo number_format($amount); ?></td>
        </tr>
        <?php } ?>

    </table>

    <div class="result">
        <h2>Salary Analysis</h2>

        <p><strong>Highest Salary:</strong> ₹<?php echo number_format($highest); ?></p>

        <p><strong>Lowest Salary:</strong> ₹<?php echo number_format($lowest); ?></p>

        <p><strong>Average Salary:</strong> ₹<?php echo number_format($average, 2); ?></p>
    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>