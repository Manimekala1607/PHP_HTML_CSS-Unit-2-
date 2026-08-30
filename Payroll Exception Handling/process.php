<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $salary = (float)$_POST["salary"];

    try {

        if ($salary <= 0) {
            throw new Exception("Salary must be greater than ₹0.");
        }

        if ($salary > 1000000) {
            throw new Exception("Salary amount is too high.");
        }

        // Salary calculation
        $allowance = $salary * 0.10;
        $deduction = $salary * 0.05;
        $netSalary = $salary + $allowance - $deduction;

        $message = "Payroll Processed Successfully!";
        $status = "success";

    } catch (Exception $e) {

        $message = $e->getMessage();
        $status = "error";

    }

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Payroll Result</h1>

    <div class="<?php echo $status; ?>">

        <h2><?php echo $message; ?></h2>

        <p>
            <strong>Employee Name:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Basic Salary:</strong>
            ₹<?php echo number_format($salary, 2); ?>
        </p>

        <?php if ($status == "success") { ?>

            <p>
                <strong>Allowance (10%):</strong>
                ₹<?php echo number_format($allowance, 2); ?>
            </p>

            <p>
                <strong>Deduction (5%):</strong>
                ₹<?php echo number_format($deduction, 2); ?>
            </p>

            <p>
                <strong>Net Salary:</strong>
                ₹<?php echo number_format($netSalary, 2); ?>
            </p>

        <?php } ?>

    </div>

    <a href="index.php" class="back">Calculate Again</a>

</div>

</body>
</html>