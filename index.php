<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>

    <h1>Feedback Form</h1>

    <?php
    include 'process_feedback.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $feedback = $_POST['feedback'];
        processFeedback($feedback);
        echo "<p>Thank you for your feedback!</p>";
    } else {
    ?>

    <form action="index.php" method="post">
        <label for="feedback">Enter your feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Submit Feedback">
    </form>

    <?php } ?>

</body>
</html>
