<!DOCTYPE html>
<html>
<head>
    <title>Player Score Analysis</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Player Score Analysis</h1>
    <p>Enter player scores</p>

    <form action="process.php" method="post">

        <label>Player Name</label>
        <input type="text" name="name" required>

        <label>Score 1</label>
        <input type="number" name="score1" min="0" required>

        <label>Score 2</label>
        <input type="number" name="score2" min="0" required>

        <label>Score 3</label>
        <input type="number" name="score3" min="0" required>

        <button type="submit">Analyze Score</button>

    </form>

</div>

</body>
</html>