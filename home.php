<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>

<html>
<head>
    <title>PHP Login & Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <a href="logout.php">Logout</a>
    <div style="width: 500px; margin: 50px auto;">
        <h3>Welcome <?php echo $_SESSION['username']; ?></h3
    </div>

    <div>
        <a href="compose.php">Compose message</a>
    </div>

    <div>
        <a href="sent-messages.php">Sent messages</a>
    </div>

    <div>
        <a href="received-messages.php">Received messages</a>
    </div>

</div>
</body>
</html>