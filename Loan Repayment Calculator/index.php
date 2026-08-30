<!DOCTYPE html>
<html>
<head>
    <title>Loan Repayment Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Loan Repayment Calculator</h1>
    <p>Enter your loan details</p>

    <form action="process.php" method="post">

        <label>Loan Amount (₹)</label>
        <input type="number" name="amount" min="1" required>

        <label>Annual Interest Rate (%)</label>
        <input type="number" name="rate" min="0" step="0.01" required>

        <label>Loan Period (Years)</label>
        <input type="number" name="years" min="1" required>

        <button type="submit">Calculate</button>

    </form>

</div>

</body>
</html>