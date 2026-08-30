<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $account = trim($_POST["account"]);

    // Regular expressions
    $namePattern = "/^[A-Za-z ]+$/";
    $phonePattern = "/^[0-9]{10}$/";
    $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    $accountPattern = "/^[0-9]{10,16}$/";

    $nameValid = preg_match($namePattern, $name);
    $phoneValid = preg_match($phonePattern, $phone);
    $emailValid = preg_match($emailPattern, $email);
    $accountValid = preg_match($accountPattern, $account);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Validation Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Customer Validation Report</h1>

    <div class="result">

        <p>
            <strong>Name:</strong>
            <?php echo htmlspecialchars($name); ?>

            <?php if ($nameValid) { ?>
                <span class="valid">Valid</span>
            <?php } else { ?>
                <span class="invalid">Invalid</span>
            <?php } ?>
        </p>

        <p>
            <strong>Phone:</strong>
            <?php echo htmlspecialchars($phone); ?>

            <?php if ($phoneValid) { ?>
                <span class="valid">Valid</span>
            <?php } else { ?>
                <span class="invalid">Invalid</span>
            <?php } ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo htmlspecialchars($email); ?>

            <?php if ($emailValid) { ?>
                <span class="valid">Valid</span>
            <?php } else { ?>
                <span class="invalid">Invalid</span>
            <?php } ?>
        </p>

        <p>
            <strong>Account Number:</strong>
            <?php echo htmlspecialchars($account); ?>

            <?php if ($accountValid) { ?>
                <span class="valid">Valid</span>
            <?php } else { ?>
                <span class="invalid">Invalid</span>
            <?php } ?>
        </p>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>