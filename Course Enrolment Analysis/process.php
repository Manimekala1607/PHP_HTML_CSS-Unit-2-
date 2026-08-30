<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $course = htmlspecialchars($_POST["course"]);
    $students = (int)$_POST["students"];

    // Course enrolment array
    $courses = [
        "PHP" => 40,
        "Java" => 35,
        "Python" => 45,
        $course => $students
    ];

    $total = array_sum($courses);

    $popularCourse = array_search(max($courses), $courses);
    $highestStudents = max($courses);

} else {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Enrolment Summary</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Course Enrolment Summary</h1>

    <table>

        <tr>
            <th>Course</th>
            <th>Students Enrolled</th>
        </tr>

        <?php foreach ($courses as $name => $count) { ?>

        <tr>
            <td><?php echo htmlspecialchars($name); ?></td>
            <td><?php echo $count; ?></td>
        </tr>

        <?php } ?>

    </table>

    <div class="result">

        <h2>Analysis</h2>

        <p>
            <strong>Total Students:</strong>
            <?php echo $total; ?>
        </p>

        <p>
            <strong>Most Popular Course:</strong>
            <?php echo $popularCourse; ?>
        </p>

        <p>
            <strong>Students Enrolled:</strong>
            <?php echo $highestStudents; ?>
        </p>

    </div>

    <a href="index.php" class="back">Back to Form</a>

</div>

</body>
</html>