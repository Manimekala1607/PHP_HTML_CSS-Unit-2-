<!DOCTYPE html>
<html>
<head>
    <title>Payroll Exception Handling</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Payroll Processing</h1>
    <p>Enter employee salary details</p>

    <form action="process.php" method="post">

        <label>Employee Name</label>
        <input type="text" name="name" required>

        <label>Basic Salary (₹)</label>
        <input type="number" name="salary" step="0.01" required>

        <button type="submit">Calculate Salary</button>

    </form>

</div>

</body>
</html>