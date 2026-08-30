<!DOCTYPE html>
<html>
<head>
    <title>Examination Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Examination Result</h1>
    <p>Enter student marks</p>

    <form action="process.php" method="post">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Mark 1</label>
        <input type="number" name="mark1" min="0" max="100" required>

        <label>Mark 2</label>
        <input type="number" name="mark2" min="0" max="100" required>

        <label>Mark 3</label>
        <input type="number" name="mark3" min="0" max="100" required>

        <button type="submit">Process Result</button>

    </form>

</div>

</body>
</html>