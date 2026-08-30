<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $age = (int)$_POST["age"];
    $phone = trim($_POST["phone"]);
    $blood = trim($_POST["blood"]);

    try {

        // Validate name
        if (!preg_match("/^[A-Za-z ]+$/", $name)) {
            throw new Exception("Invalid patient name.");
        }

        // Validate age
        if ($age <= 0 || $age > 120) {
            throw new Exception("Age must be between 1 and 120.");
        }

        // Validate phone
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            throw new Exception("Phone number must contain 10 digits.");
        }

        // Validate blood group
        if (!preg_match("/^(A|B|AB|O)[+-]$/", strtoupper($blood))) {
            throw new Exception("Invalid blood group.");
        }

        $message = "Patient data processed successfully!";
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
    <title>Patient Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Patient Data Result</h1>

    <div class="<?php echo $status; ?>">

        <h2><?php echo $message; ?></h2>

        <?php if ($status == "success") { ?>

            <p>
                <strong>Patient Name:</strong>
                <?php echo htmlspecialchars($name); ?>
            </p>

            <p>
                <strong>Age:</strong>
                <?php echo $age; ?>
            </p>

            <p>
                <strong>Phone:</strong>
                <?php echo htmlspecialchars($phone); ?>
            </p>

            <p>
                <strong>Blood Group:</strong>
                <?php echo htmlspecialchars(strtoupper($blood)); ?>
            </p>

        <?php } ?>

    </div>

    <a href="index.php" class="back">Enter Another Patient</a>

</div>

</body>
</html>