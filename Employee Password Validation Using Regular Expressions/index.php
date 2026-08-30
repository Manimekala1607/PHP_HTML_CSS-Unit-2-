<!DOCTYPE html>
<html>
<head>
    <title>Password Validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Employee Password Validation</h1>

    <form action="process.php" method="post">

        <label>Employee Name</label>
        <input type="text" name="name" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Validate Password</button>

    </form>

</div>

</body>
</html>