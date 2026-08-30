<!DOCTYPE html>
<html>
<head>
    <title>Digital Marketing Campaign Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Digital Marketing Campaign</h1>
    <p>Enter campaign details</p>

    <form action="process.php" method="post">

        <label>Campaign Name</label>
        <input type="text" name="campaign" required>

        <label>Total Views</label>
        <input type="number" name="views" min="1" required>

        <label>Total Clicks</label>
        <input type="number" name="clicks" min="0" required>

        <button type="submit">Analyze Campaign</button>

    </form>

</div>

</body>
</html>