<!DOCTYPE html>
<html>
<head>
    <title>Employee Salary Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Employee Salary Analysis</h1>
    <p>Enter Employee Salary Details</p>

    <form action="process.php" method="post">

        <label>Employee Name</label>
        <input type="text" name="name" required>

        <label>Salary</label>
        <input type="number" name="salary" min="0" required>

        <button type="submit">Calculate Salary</button>

    </form>

</div>

</body>
</html>