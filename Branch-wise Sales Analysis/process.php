<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $branch = htmlspecialchars($_POST["branch"]);
    $product1 = (int)$_POST["product1"];
    $product2 = (int)$_POST["product2"];
    $product3 = (int)$_POST["product3"];

    // Multidimensional array
    $sales = [
        [
            "branch" => $branch,
            "sales" => [
                "Product 1" => $product1,
                "Product 2" => $product2,
                "Product 3" => $product3
            ]
        ]
    ];

    $total = array_sum($sales[0]["sales"]);
    $average = $total / 3;

} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Branch Sales Report</h1>

    <table>
        <tr>
            <th>Branch</th>
            <th>Product 1</th>
            <th>Product 2</th>
            <th>Product 3</th>
            <th>Total Sales</th>
            <th>Average</th>
        </tr>

        <tr>
            <td><?php echo $sales[0]["branch"]; ?></td>
            <td><?php echo $sales[0]["sales"]["Product 1"]; ?></td>
            <td><?php echo $sales[0]["sales"]["Product 2"]; ?></td>
            <td><?php echo $sales[0]["sales"]["Product 3"]; ?></td>
            <td><?php echo $total; ?></td>
            <td><?php echo number_format($average, 2); ?></td>
        </tr>
    </table>

    <div class="result">

        <h2>Sales Summary</h2>

        <p>
            <strong>Branch:</strong>
            <?php echo $branch; ?>
        </p>

        <p>
            <strong>Total Sales:</strong>
            <?php echo $total; ?>
        </p>

        <p>
            <strong>Average Sales:</strong>
            <?php echo number_format($average, 2); ?>
        </p>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>