<!DOCTYPE html>
<html>
<head>
    <title>Patient Data Processing</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Patient Data Processing</h1>
    <p>Enter patient details</p>

    <form action="process.php" method="post">

        <label>Patient Name</label>
        <input type="text" name="name" required>

        <label>Age</label>
        <input type="number" name="age" min="1" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Blood Group</label>
        <input type="text" name="blood" placeholder="Example: A+" required>

        <button type="submit">Process Patient</button>

    </form>

</div>

</body>
</html>