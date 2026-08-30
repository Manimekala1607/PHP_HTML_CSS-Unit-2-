<!DOCTYPE html>
<html>
<head>
    <title>Course Enrolment Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Course Enrolment Analysis</h1>
    <p>Enter the number of students enrolled in each course</p>

    <form action="process.php" method="post">

        <label>Course Name</label>
        <input type="text" name="course" required>

        <label>Number of Students</label>
        <input type="number" name="students" min="1" required>

        <button type="submit">Generate Summary</button>

    </form>

</div>

</body>
</html>