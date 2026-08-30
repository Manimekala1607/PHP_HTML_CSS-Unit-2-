<!DOCTYPE html>
<html>
<head>
    <title>Customer Support Queue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Customer Support Queue</h1>
    <p>Add a customer request to the support queue</p>

    <form action="process.php" method="post">

        <label>Customer Name</label>
        <input type="text" name="name" required>

        <label>Support Request</label>
        <input type="text" name="request" required>

        <button type="submit">Add Request</button>

    </form>

</div>

</body>
</html>