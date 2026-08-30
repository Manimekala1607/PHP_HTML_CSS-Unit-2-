<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $request = htmlspecialchars($_POST["request"]);

    // Queue using array
    $queue = [];

    // Add customer request to queue
    array_push($queue, [
        "name" => $name,
        "request" => $request
    ]);

    // Add sample requests
    array_unshift($queue, [
        "name" => "Priya",
        "request" => "Login Problem"
    ]);

    array_push($queue, [
        "name" => "Kavi",
        "request" => "Payment Problem"
    ]);

    // Process first customer - FIFO
    $processed = array_shift($queue);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Support Queue Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Customer Support Queue</h1>

    <div class="processed">

        <h2>Processed Request</h2>

        <p>
            <strong>Customer:</strong>
            <?php echo $processed["name"]; ?>
        </p>

        <p>
            <strong>Request:</strong>
            <?php echo $processed["request"]; ?>
        </p>

    </div>

    <h2>Remaining Queue</h2>

    <?php if (count($queue) > 0) { ?>

        <table>

            <tr>
                <th>Customer</th>
                <th>Support Request</th>
            </tr>

            <?php foreach ($queue as $customer) { ?>

            <tr>
                <td><?php echo $customer["name"]; ?></td>
                <td><?php echo $customer["request"]; ?></td>
            </tr>

            <?php } ?>

        </table>

    <?php } else { ?>

        <p>No requests remaining.</p>

    <?php } ?>

    <a href="index.php" class="back">Add Another Request</a>

</div>

</body>
</html>