<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $campaign = htmlspecialchars($_POST["campaign"]);
    $views = (int)$_POST["views"];
    $clicks = (int)$_POST["clicks"];

    if ($clicks > $views) {

        $error = "Clicks cannot be greater than views.";
        $success = false;

    } else {

        $campaignData = [
            "Campaign" => $campaign,
            "Views" => $views,
            "Clicks" => $clicks
        ];

        $ctr = ($clicks / $views) * 100;

        if ($ctr >= 5) {
            $performance = "Excellent";
        } elseif ($ctr >= 2) {
            $performance = "Good";
        } else {
            $performance = "Needs Improvement";
        }

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
    <title>Campaign Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Campaign Analysis</h1>

    <?php if ($success) { ?>

        <div class="result">

            <h2><?php echo $campaign; ?></h2>

            <p>
                <strong>Total Views:</strong>
                <?php echo $views; ?>
            </p>

            <p>
                <strong>Total Clicks:</strong>
                <?php echo $clicks; ?>
            </p>

            <p>
                <strong>Click-Through Rate:</strong>
                <?php echo number_format($ctr, 2); ?>%
            </p>

            <p>
                <strong>Performance:</strong>
                <?php echo $performance; ?>
            </p>

        </div>

    <?php } else { ?>

        <div class="error">
            <h2>Error</h2>
            <p><?php echo $error; ?></p>
        </div>

    <?php } ?>

    <a href="index.php" class="back">Analyze Another Campaign</a>

</div>

</body>
</html>