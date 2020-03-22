<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>
    <div class="header">
        <h1>Form</h1>
    </div>
    <h1>Home</h1>
    <div><h4>Welcome <?php echo $_SESSION['username'];   ?></h4></div>
</body>
</html>