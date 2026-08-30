<?php

$empid = $_POST['empid'];
$name = $_POST['name'];
$date = $_POST['date'];
$status = $_POST['status'];

$file = "attendance.txt";

$data = "$empid | $name | $date | $status\n";

file_put_contents($file, $data, FILE_APPEND);

$records = file($file);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendance Records</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Employee Attendance Records</h2>

    <p class="success">
        Attendance saved successfully!
    </p>

    <table>

        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Status</th>
        </tr>

        <?php

        foreach ($records as $record) {

            $data = explode(" | ", trim($record));

            echo "<tr>";

            foreach ($data as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }

            echo "</tr>";
        }

        ?>

    </table>

    <br>

    <a href="index.php">
        <button>Add Attendance</button>
    </a>

</div>

</body>
</html>