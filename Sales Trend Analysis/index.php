<!DOCTYPE html>
<html>
<head>
    <title>Sales Trend Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Sales Trend Analysis</h1>
    <p>Enter monthly sales details</p>

    <form action="process.php" method="post">

        <label>Month 1 Sales</label>
        <input type="number" name="sale1" min="0" required>

        <label>Month 2 Sales</label>
        <input type="number" name="sale2" min="0" required>

        <label>Month 3 Sales</label>
        <input type="number" name="sale3" min="0" required>

        <label>Month 4 Sales</label>
        <input type="number" name="sale4" min="0" required>

        <button type="submit">Analyze Sales</button>

    </form>

</div>

</body>
</html>