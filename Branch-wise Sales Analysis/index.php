<!DOCTYPE html>
<html>
<head>
    <title>Branch-wise Sales Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Branch-wise Sales Analysis</h1>
    <p>Enter sales details for different branches</p>

    <form action="process.php" method="post">

        <label>Branch Name</label>
        <input type="text" name="branch" required>

        <label>Product 1 Sales</label>
        <input type="number" name="product1" min="0" required>

        <label>Product 2 Sales</label>
        <input type="number" name="product2" min="0" required>

        <label>Product 3 Sales</label>
        <input type="number" name="product3" min="0" required>

        <button type="submit">Generate Sales Report</button>

    </form>

</div>

</body>
</html>