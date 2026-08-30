<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $train = htmlspecialchars($_POST["train"]);

    // Waiting list queue
    $waitingList = [];

    // Existing passengers
    array_push($waitingList, [
        "name" => "Priya",
        "train" => "Chennai Express"
    ]);

    array_push($waitingList, [
        "name" => "Kavi",
        "train" => "Coimbatore Express"
    ]);

    // Add new passenger
    array_push($waitingList, [
        "name" => $name,
        "train" => $train
    ]);

    // First passenger gets processed
    $confirmed = array_shift($waitingList);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reservation Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Railway Reservation Result</h1>

    <div class="confirmed">

        <h2>Ticket Confirmed</h2>

        <p>
            <strong>Passenger:</strong>
            <?php echo $confirmed["name"]; ?>
        </p>

        <p>
            <strong>Train:</strong>
            <?php echo $confirmed["train"]; ?>
        </p>

    </div>

    <h2>Remaining Waiting List</h2>

    <table>

        <tr>
            <th>Passenger</th>
            <th>Train</th>
        </tr>

        <?php foreach ($waitingList as $passenger) { ?>

        <tr>
            <td><?php echo $passenger["name"]; ?></td>
            <td><?php echo $passenger["train"]; ?></td>
        </tr>

        <?php } ?>

    </table>

    <a href="index.php" class="back">Add Passenger</a>

</div>

</body>
</html>