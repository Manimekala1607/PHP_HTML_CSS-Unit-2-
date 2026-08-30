<!DOCTYPE html>
<html>
<head>
    <title>Stock Performance Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Stock Performance Analysis</h1>
    <p>Enter stock prices</p>

    <form action="process.php" method="post">

        <label>Day 1 Price</label>
        <input type="number" name="price1" min="0" step="0.01" required>

        <label>Day 2 Price</label>
        <input type="number" name="price2" min="0" step="0.01" required>

        <label>Day 3 Price</label>
        <input type="number" name="price3" min="0" step="0.01" required>

        <label>Day 4 Price</label>
        <input type="number" name="price4" min="0" step="0.01" required>

        <button type="submit">Analyze Stock</button>

    </form>

</div>

</body>
</html>