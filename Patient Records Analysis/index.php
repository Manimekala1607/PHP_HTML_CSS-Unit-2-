<!DOCTYPE html>
<html>
<head>
    <title>Patient Records Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Patient Records Analysis</h1>
    <p>Enter Patient Details</p>

    <form action="process.php" method="post">

        <label>Patient Name</label>
        <input type="text" name="name" required>

        <label>Age</label>
        <input type="number" name="age" min="1" max="120" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Orthopedic">Orthopedic</option>
        </select>

        <label>Treatment</label>
        <input type="text" name="treatment" required>

        <button type="submit">Generate Report</button>

    </form>

</div>

</body>
</html>