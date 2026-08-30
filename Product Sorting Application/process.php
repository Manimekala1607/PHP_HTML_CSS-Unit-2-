<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $products = [
        [
            "name" => htmlspecialchars($_POST["product1"]),
            "price" => (float)$_POST["price1"]
        ],
        [
            "name" => htmlspecialchars($_POST["product2"]),
            "price" => (float)$_POST["price2"]
        ],
        [
            "name" => htmlspecialchars($_POST["product3"]),
            "price" => (float)$_POST["price3"]
        ]
    ];

    // Sort products by price
    usort($products, function ($a, $b) {
        return $a["price"] <=> $b["price"];
    });

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sorted Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Sorted Product List</h1>

    <div class="result">

        <h2>Products by Price</h2>

        <table>

            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>

            <?php foreach ($products as $product) { ?>

            <tr>
                <td><?php echo $product["name"]; ?></td>
                <td>₹<?php echo number_format($product["price"], 2); ?></td>
            </tr>

            <?php } ?>

        </table>

    </div>

    <a href="index.php" class="back">Sort Again</a>

</div>

</body>
</html>