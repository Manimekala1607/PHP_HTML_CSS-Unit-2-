<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $website = htmlspecialchars($_POST["website"]);

    // Stack - Browser History
    $history = [
        "Google",
        "YouTube",
        "Instagram"
    ];

    // Add new website
    array_push($history, $website);

    // LIFO - remove recently visited website
    $lastVisited = array_pop($history);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Browser History Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Browser History</h1>

    <div class="last-page">

        <h2>Last Visited Page</h2>

        <p>
            <?php echo $lastVisited; ?>
        </p>

    </div>

    <h2>Remaining History</h2>

    <table>

        <tr>
            <th>History</th>
        </tr>

        <?php foreach ($history as $page) { ?>

        <tr>
            <td><?php echo $page; ?></td>
        </tr>

        <?php } ?>

    </table>

    <a href="index.php" class="back">Visit Another Website</a>

</div>

</body>
</html>