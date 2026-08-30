<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $total = (int)$_POST["total"];
    $placed = (int)$_POST["placed"];

    if ($placed > $total) {
        $error = "Placed students cannot be greater than total students.";
        $success = false;
    } else {

        $students = [
            "Total Students" => $total,
            "Placed Students" => $placed
        ];

        $notPlaced = $total - $placed;

        $placementPercentage = ($placed / $total) * 100;

        $success = true;
    }

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Placement Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Placement Statistics</h1>

    <?php if ($success) { ?>

        <div class="result">

            <h2>Placement Report</h2>

            <p>
                <strong>Total Students:</strong>
                <?php echo $total; ?>
            </p>

            <p>
                <strong>Placed Students:</strong>
                <?php echo $placed; ?>
            </p>

            <p>
                <strong>Not Placed Students:</strong>
                <?php echo $notPlaced; ?>
            </p>

            <p>
                <strong>Placement Percentage:</strong>
                <?php echo number_format($placementPercentage, 2); ?>%
            </p>

        </div>

    <?php } else { ?>

        <div class="error">
            <h2>Error</h2>
            <p><?php echo $error; ?></p>
        </div>

    <?php } ?>

    <a href="index.php" class="back">Calculate Again</a>

</div>

</body>
</html>