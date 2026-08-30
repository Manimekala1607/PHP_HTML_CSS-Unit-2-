<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = $_POST["password"];

    $nameValid = preg_match("/^[A-Za-z ]+$/", $name);
    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
    $phoneValid = preg_match("/^[0-9]{10}$/", $phone);
    $passwordValid = strlen($password) >= 8;

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Result</h1>

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
            <strong>Email:</strong>
            <?php echo htmlspecialchars($email); ?>

            <?php if ($emailValid) { ?>
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
            <strong>Password:</strong>

            <?php if ($passwordValid) { ?>
                <span class="valid">Valid</span>
            <?php } else { ?>
                <span class="invalid">Minimum 8 characters required</span>
            <?php } ?>
        </p>

        <?php if ($nameValid && $emailValid && $phoneValid && $passwordValid) { ?>

            <div class="success">
                Registration Successful!
            </div>

        <?php } else { ?>

            <div class="failure">
                Please correct the invalid details.
            </div>

        <?php } ?>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>