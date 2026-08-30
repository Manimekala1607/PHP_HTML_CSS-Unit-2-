<!DOCTYPE html>
<html>
<head>
    <title>Student Performance Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Performance Analysis</h1>
    <p class="subtitle">Enter Student Details and Marks</p>

    <form action="process.php" method="post">

        <label>Student Name</label>
        <input type="text" name="name" placeholder="Enter student name" required>

        <label>PHP Mark</label>
        <input type="number" name="php" min="0" max="100" placeholder="Enter PHP mark" required>

        <label>Java Mark</label>
        <input type="number" name="java" min="0" max="100" placeholder="Enter Java mark" required>

        <label>Web Design Mark</label>
        <input type="number" name="web" min="0" max="100" placeholder="Enter Web Design mark" required>

        <button type="submit">Generate Report</button>

    </form>

</div>

</body>
</html>