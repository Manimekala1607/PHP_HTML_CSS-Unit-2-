<!DOCTYPE html>
<html>
<head>
    <title>Product Sorting</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Product Sorting Application</h1>
    <p>Enter product details</p>

    <form action="process.php" method="post">

        <label>Product 1</label>
        <input type="text" name="product1" required>

        <label>Price</label>
        <input type="number" name="price1" min="0" step="0.01" required>

        <label>Product 2</label>
        <input type="text" name="product2" required>

        <label>Price</label>
        <input type="number" name="price2" min="0" step="0.01" required>

        <label>Product 3</label>
        <input type="text" name="product3" required>

        <label>Price</label>
        <input type="number" name="price3" min="0" step="0.01" required>

        <button type="submit">Sort Products</button>

    </form>

</div>

</body>
</html>