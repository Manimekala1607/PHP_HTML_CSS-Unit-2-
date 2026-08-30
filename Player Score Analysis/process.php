<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);

    $scores = [
        (int)$_POST["score1"],
        (int)$_POST["score2"],
        (int)$_POST["score3"]
    ];

    $total = array_sum($scores);
    $average = $total / count($scores);
    $highest = max($scores);
    $lowest = min($scores);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Score Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Player Score Report</h1>

    <div class="result">

        <h2><?php echo $name; ?></h2>

        <p>
            <strong>Scores:</strong>
            <?php echo implode(", ", $scores); ?>
        </p>

        <p>
            <strong>Total Score:</strong>
            <?php echo $total; ?>
        </p>

        <p>
            <strong>Average Score:</strong>
            <?php echo number_format($average, 2); ?>
        </p>

        <p>
            <strong>Highest Score:</strong>
            <?php echo $highest; ?>
        </p>

        <p>
            <strong>Lowest Score:</strong>
            <?php echo $lowest; ?>
        </p>

    </div>

    <a href="index.php" class="back">Analyze Another Player</a>

</div>

</body>
</html>