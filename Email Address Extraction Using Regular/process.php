<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $records = $_POST["records"];


    // Regular expression for email
    $pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";


    // Extract email addresses
    preg_match_all($pattern, $records, $matches);


    $emails = $matches[0];


} else {


    header("Location: index.php");
    exit();


}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Email Extraction Result</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


<div class="container">


    <h1>Email Extraction Result</h1>


    <?php if (count($emails) > 0) { ?>


        <div class="result">


            <h2>Valid Email Addresses</h2>


            <?php foreach ($emails as $email) { ?>


                <p class="email">
                    <?php echo htmlspecialchars($email); ?>
                </p>


            <?php } ?>


            <p>
                <strong>Total Emails Found:</strong>
                <?php echo count($emails); ?>
            </p>


        </div>


    <?php } else { ?>


        <div class="error">
            <h2>No Email Addresses Found</h2>
            <p>Please enter valid email addresses.</p>
        </div>


    <?php } ?>


    <a href="index.php" class="back">Back to Form</a>


</div>


</body>
</html>
