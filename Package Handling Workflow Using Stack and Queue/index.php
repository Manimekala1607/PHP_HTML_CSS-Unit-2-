<!DOCTYPE html>
<html>
<head>
    <title>Package Handling System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Package Handling System</h1>
    <p>Enter package details</p>

    <form action="process.php" method="post">

        <label>Package ID</label>
        <input type="text" name="package_id" required>

        <label>Package Name</label>
        <input type="text" name="package_name" required>

        <button type="submit">Process Package</button>

    </form>

</div>

</body>
</html>