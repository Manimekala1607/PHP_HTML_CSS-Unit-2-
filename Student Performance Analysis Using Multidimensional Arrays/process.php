<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $php = (int)$_POST["php"];
    $java = (int)$_POST["java"];
    $web = (int)$_POST["web"];

    // Multidimensional array
    $student = [
        "name" => $name,
        "marks" => [
            "PHP" => $php,
            "Java" => $java,
            "Web Design" => $web
        ]
    ];

    // Calculate total
    $total = $php + $java + $web;

    // Calculate average
    $average = $total / 3;

    // Find highest subject
    $highestMark = max($student["marks"]);
    $topSubject = array_search($highestMark, $student["marks"]);

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Performance Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Performance Report</h1>

    <table>

        <tr>
            <th>Student Name</th>
            <th>PHP</th>
            <th>Java</th>
            <th>Web Design</th>
            <th>Total</th>
            <th>Average</th>
        </tr>

        <tr>
            <td><?php echo $student["name"]; ?></td>

            <td>
                <?php echo $student["marks"]["PHP"]; ?>
            </td>

            <td>
                <?php echo $student["marks"]["Java"]; ?>
            </td>

            <td>
                <?php echo $student["marks"]["Web Design"]; ?>
            </td>

            <td>
                <?php echo $total; ?>
            </td>

            <td>
                <?php echo number_format($average, 2); ?>
            </td>
        </tr>

    </table>

    <div class="result">

        <h2>Performance Summary</h2>

        <p>
            <strong>Student Name:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Total Marks:</strong>
            <?php echo $total; ?> / 300
        </p>

        <p>
            <strong>Average:</strong>
            <?php echo number_format($average, 2); ?>%
        </p>

        <p>
            <strong>Highest Mark:</strong>
            <?php echo $highestMark; ?>
        </p>

        <p>
            <strong>Best Subject:</strong>
            <?php echo $topSubject; ?>
        </p>

        <?php

        if ($average >= 90) {
            $grade = "A+";
        } elseif ($average >= 80) {
            $grade = "A";
        } elseif ($average >= 70) {
            $grade = "B";
        } elseif ($average >= 60) {
            $grade = "C";
        } else {
            $grade = "D";
        }

        ?>

        <p>
            <strong>Grade:</strong>
            <?php echo $grade; ?>
        </p>

    </div>

    <a href="index.php" class="back-button">
        ← Back to Student Form
    </a>

</div>

</body>
</html>