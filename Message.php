<?php

$servername = "localhost";

$db_username = "root";

$db_password = "";

$dbname = "merga"; 



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    die("Connection failed: " . $e->getMessage());

}


$query = "SELECT * FROM `message` ORDER BY `date_created` DESC";

$stmt = $conn->prepare($query);

$stmt->execute();

$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Message Interface</title>

</head>

<body>

    <h2>Messages</h2>



    <?php if (empty($messages)): ?>

        <p>No messages found.</p>

    <?php else: ?>

        <ul>

            <?php foreach ($messages as $message): ?>

                <li>

                    <strong>Name:</strong> <?php echo $message['Name']; ?><br>

                    <strong>Email:</strong> <?php echo $message['email']; ?><br>

                    <strong>Subject:</strong> <?php echo $message['subject']; ?><br>

                    <strong>Message:</strong> <?php echo $message['message']; ?><br>

                    <strong>Date Created:</strong> <?php echo $message['date_created']; ?>

                </li>

                <hr>

            <?php endforeach; ?>

        </ul>

    <?php endif; ?>



    <?php $conn = null; ?>

</body>

</html>
