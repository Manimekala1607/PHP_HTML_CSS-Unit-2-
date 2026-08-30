<?php

$name = htmlspecialchars($_POST["name"]);
$password = $_POST["password"];

/*
Password Rules:
1. Minimum 8 characters
2. At least one uppercase letter
3. At least one lowercase letter
4. At least one number
*/

$pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/";

if (preg_match($pattern, $password)) {
    $message = "Password is Valid";
} else {
    $message = "Password is Invalid";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Password Validation Result</h1>

    <div class="result">

        <p>
            <strong>Employee Name:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Result:</strong>
            <?php echo $message; ?>
        </p>

        <p>
            Password must contain:
        </p>

        <ul>
            <li>At least 8 characters</li>
            <li>One uppercase letter</li>
            <li>One lowercase letter</li>
            <li>One number</li>
        </ul>

    </div>

    <a href="index.php" class="back">Back</a>

</div>

</body>
</html>