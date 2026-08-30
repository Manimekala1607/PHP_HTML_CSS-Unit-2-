<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $age = (int)$_POST["age"];
    $department = htmlspecialchars($_POST["department"]);
    $treatment = htmlspecialchars($_POST["treatment"]);

    // Multidimensional array
    $patients = [
        [
            "name" => "Arun",
            "age" => 45,
            "department" => "Cardiology",
            "treatment" => "ECG"
        ],
        [
            "name" => "Priya",
            "age" => 30,
            "department" => "Neurology",
            "treatment" => "Scan"
        ],
        [
            "name" => $name,
            "age" => $age,
            "department" => $department,
            "treatment" => $treatment
        ]
    ];

    // Patient count
    $patientCount = count($patients);

    // Calculate average age
    $totalAge = 0;

    foreach ($patients as $patient) {
        $totalAge += $patient["age"];
    }

    $averageAge = $totalAge / $patientCount;

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Report</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Patient Records Report</h1>

    <table>

        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Department</th>
            <th>Treatment</th>
        </tr>

        <?php foreach ($patients as $patient) { ?>

        <tr>
            <td><?php echo $patient["name"]; ?></td>
            <td><?php echo $patient["age"]; ?></td>
            <td><?php echo $patient["department"]; ?></td>
            <td><?php echo $patient["treatment"]; ?></td>
        </tr>

        <?php } ?>

    </table>

    <div class="result">

        <h2>Patient Statistics</h2>

        <p>
            <strong>Total Patients:</strong>
            <?php echo $patientCount; ?>
        </p>

        <p>
            <strong>Average Age:</strong>
            <?php echo number_format($averageAge, 2); ?>
        </p>

        <p>
            <strong>Latest Patient Department:</strong>
            <?php echo $department; ?>
        </p>

        <p>
            <strong>Treatment:</strong>
            <?php echo $treatment; ?>
        </p>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>