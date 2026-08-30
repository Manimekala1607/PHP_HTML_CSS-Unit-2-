<!DOCTYPE html>
<html>
<head>
    <title>Student Placement Statistics</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Placement Statistics</h1>
    <p>Enter placement details</p>

    <form action="process.php" method="post">

        <label>Total Students</label>
        <input type="number" name="total" min="1" required>

        <label>Placed Students</label>
        <input type="number" name="placed" min="0" required>

        <button type="submit">Calculate Statistics</button>

    </form>

</div>

</body>
</html>