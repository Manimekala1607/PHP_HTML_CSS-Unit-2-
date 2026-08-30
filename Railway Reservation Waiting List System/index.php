<!DOCTYPE html>
<html>
<head>
    <title>Railway Waiting List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Railway Reservation</h1>
    <p>Enter passenger details</p>

    <form action="process.php" method="post">

        <label>Passenger Name</label>
        <input type="text" name="name" required>

        <label>Train Name</label>
        <input type="text" name="train" required>

        <button type="submit">Add to Waiting List</button>

    </form>

</div>

</body>
</html>