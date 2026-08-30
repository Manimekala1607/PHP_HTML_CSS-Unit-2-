<!DOCTYPE html>
<html>
<head>
    <title>Banking Transaction</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Banking Transaction</h1>
    <p>Enter transaction details</p>

    <form action="process.php" method="post">

        <label>Account Holder Name</label>
        <input type="text" name="name" required>

        <label>Transaction Amount (₹)</label>
        <input type="number" name="amount" min="0" step="0.01" required>

        <button type="submit">Process Transaction</button>

    </form>

</div>

</body>
</html>