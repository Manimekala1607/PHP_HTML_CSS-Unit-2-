<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $packageId = htmlspecialchars($_POST["package_id"]);
    $packageName = htmlspecialchars($_POST["package_name"]);

    // Queue
    $queue = [
        "Package 101",
        "Package 102",
        "Package 103"
    ];

    // Add new package to Queue
    array_push($queue, $packageId);

    // FIFO - remove first package
    $processedQueue = array_shift($queue);

    // Stack
    $stack = [
        "Package A",
        "Package B",
        "Package C"
    ];

    // Add new package to Stack
    array_push($stack, $packageName);

    // LIFO - remove last package
    $processedStack = array_pop($stack);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Package Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Package Handling Result</h1>

    <div class="queue-box">

        <h2>Queue Processing - FIFO</h2>

        <p>
            <strong>Processed Package:</strong>
            <?php echo $processedQueue; ?>
        </p>

        <p>
            First package is processed first.
        </p>

    </div>

    <div class="stack-box">

        <h2>Stack Processing - LIFO</h2>

        <p>
            <strong>Processed Package:</strong>
            <?php echo $processedStack; ?>
        </p>

        <p>
            Last package is processed first.
        </p>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>