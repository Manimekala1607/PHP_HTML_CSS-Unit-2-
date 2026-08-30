<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $search = strtolower(trim($_POST["song"]));

    // Song details using array
    $songs = [
        "perfect" => [
            "title" => "Perfect",
            "artist" => "Ed Sheeran",
            "genre" => "Pop"
        ],
        "shape of you" => [
            "title" => "Shape of You",
            "artist" => "Ed Sheeran",
            "genre" => "Pop"
        ],
        "believer" => [
            "title" => "Believer",
            "artist" => "Imagine Dragons",
            "genre" => "Rock"
        ],
        "faded" => [
            "title" => "Faded",
            "artist" => "Alan Walker",
            "genre" => "Electronic"
        ]
    ];

    $totalSongs = count($songs);

    if (array_key_exists($search, $songs)) {
        $result = $songs[$search];
        $message = "Song Found";
    } else {
        $result = null;
        $message = "Song Not Found";
    }

} else {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Music Search Result</h1>

    <?php if ($result != null) { ?>

        <div class="song-card">

            <h2><?php echo $message; ?></h2>

            <p>
                <strong>Song:</strong>
                <?php echo $result["title"]; ?>
            </p>

            <p>
                <strong>Artist:</strong>
                <?php echo $result["artist"]; ?>
            </p>

            <p>
                <strong>Genre:</strong>
                <?php echo $result["genre"]; ?>
            </p>

        </div>

    <?php } else { ?>

        <div class="not-found">
            <h2><?php echo $message; ?></h2>
            <p>Sorry, the requested song is not available.</p>
        </div>

    <?php } ?>

    <div class="total">
        <strong>Total Songs in Playlist:</strong>
        <?php echo $totalSongs; ?>
    </div>

    <a href="index.php" class="back">Search Another Song</a>

</div>

</body>
</html>