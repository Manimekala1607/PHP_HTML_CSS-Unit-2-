<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $mark1 = (int)$_POST["mark1"];
    $mark2 = (int)$_POST["mark2"];
    $mark3 = (int)$_POST["mark3"];

    try {

        if ($mark1 < 0 || $mark1 > 100 ||
            $mark2 < 0 || $mark2 > 100 ||
            $mark3 < 0 || $mark3 > 100) {

            throw new Exception("Marks must be between 0 and 100.");
        }

        $total = $mark1 + $mark2 + $mark3;
        $average = $total / 3;

        if ($mark1 < 35 || $mark2 < 35 || $mark3 < 35) {
            $result = "Fail";
        } else {
            $result = "Pass";
        }

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
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Examination Result</h1>

    <?php if ($status == "success") { ?>

        <div class="result">

            <h2>Result Processed Successfully</h2>

            <p>
                <strong>Student Name:</strong>
                <?php echo htmlspecialchars($name); ?>
            </p>

            <p>
                <strong>Mark 1:</strong>
                <?php echo $mark1; ?>
            </p>

            <p>
                <strong>Mark 2:</strong>
                <?php echo $mark2; ?>
            </p>

            <p>
                <strong>Mark 3:</strong>
                <?php echo $mark3; ?>
            </p>

            <p>
                <strong>Total:</strong>
                <?php echo $total; ?>/300
            </p>

            <p>
                <strong>Average:</strong>
                <?php echo number_format($average, 2); ?>
            </p>

            <p>
                <strong>Result:</strong>
                <?php echo $result; ?>
            </p>

        </div>

    <?php } else { ?>

        <div class="error">
            <h2>Error</h2>
            <p><?php echo $message; ?></p>
        </div>

    <?php } ?>

    <a href="index.php" class="back">Enter Again</a>

</div>

</body>
</html>