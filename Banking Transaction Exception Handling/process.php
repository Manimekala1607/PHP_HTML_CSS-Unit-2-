<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $amount = (float)$_POST["amount"];

    try {

        if ($amount <= 0) {
            throw new Exception("Transaction amount must be greater than ₹0.");
        }

        if ($amount > 100000) {
            throw new Exception("Transaction amount cannot exceed ₹1,00,000.");
        }

        $message = "Transaction Successful!";
        $status = "success";

    } catch (Exception $e) {

        $message = $e->getMessage();
        $status = "error";

    }

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Transaction Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Transaction Result</h1>

    <div class="<?php echo $status; ?>">

        <h2><?php echo $message; ?></h2>

        <p>
            <strong>Account Holder:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Amount:</strong>
            ₹<?php echo number_format($amount, 2); ?>
        </p>

    </div>

    <a href="index.php" class="back">Try Again</a>

</div>

</body>
</html>