<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendance Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Employee Attendance</h2>

    <form action="process.php" method="POST">

        <label>Employee ID</label>
        <input type="text" name="empid" required>

        <label>Employee Name</label>
        <input type="text" name="name" required>

        <label>Date</label>
        <input type="date" name="date" required>

        <label>Attendance Status</label>

        <select name="status" required>
            <option value="">Select Status</option>
            <option>Present</option>
            <option>Absent</option>
            <option>Leave</option>
        </select>

        <input type="submit" value="Save Attendance">

    </form>

</div>

</body>
</html>