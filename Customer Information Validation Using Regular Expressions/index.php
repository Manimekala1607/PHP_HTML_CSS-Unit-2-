<!DOCTYPE html>
<html>
<head>
    <title>Customer Information Validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Customer Information Validation</h1>
    <p>Enter customer details</p>

    <form action="process.php" method="post">

        <label>Customer Name</label>
        <input type="text" name="name" required>

        <label>Phone Number</label>
        <input type="text" name="phone" required>

        <label>Email ID</label>
        <input type="text" name="email" required>

        <label>Account Number</label>
        <input type="text" name="account" required>

        <button type="submit">Validate Details</button>

    </form>

</div>

</body>
</html>