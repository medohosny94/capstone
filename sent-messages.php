<?php
session_start();
include_once('dbcon.php');
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

$sender = $_SESSION['username'];
?>

<html>
<head>
    <title>PHP Login & Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div style="width: 500px; margin: 50px auto;">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <div>
                <a href="home.php">Home</a>
            </div>
            <center><h2>Sent messages</h2></center>
            <hr/>
            <?php
            if(isset($successMsg)){
                ?>
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    <?php echo $successMsg; ?>
                </div>
                <?php
            }
            ?>

            <div class="form-group">

                <?php
                $conn;
                $sql = "SELECT message_title, message_body, receiver, date FROM general_announcement WHERE sender = '$sender' ";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<br> (subject): ". $row["message_title"]. " (- message): ". $row["message_body"]. " (- sent to): " . $row["receiver"] . " (- date): ". $row["date"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }

                $conn->close();


                ?>
            </div>
            <hr/>
            <a href="logout.php">Logout</a>
        </form>
    </div>
</div>
</body>
</html>