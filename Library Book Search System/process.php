<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $searchBook = trim($_POST["book"]);

    // Library book list
    $books = [
        "PHP Programming",
        "Java Basics",
        "Web Development",
        "Database Management",
        "Python Programming"
    ];

    $found = false;
    $bookName = "";

    foreach ($books as $book) {

        if (strcasecmp($book, $searchBook) == 0) {
            $found = true;
            $bookName = $book;
            break;
        }
    }

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Library Search Result</h1>

    <?php if ($found) { ?>

        <div class="success">

            <h2>Book Available</h2>

            <p>
                <strong>Book Name:</strong>
                <?php echo htmlspecialchars($bookName); ?>
            </p>

            <p>The book is available in the library.</p>

        </div>

    <?php } else { ?>

        <div class="error">

            <h2>Book Not Found</h2>

            <p>
                "<?php echo htmlspecialchars($searchBook); ?>"
                is not available in the library.
            </p>

        </div>

    <?php } ?>

    <a href="index.php" class="back">Search Another Book</a>

</div>

</body>
</html>