<?php
session_start();
include_once('dbcon.php');
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

$sender = $_SESSION['username'];

$error = false;
if(isset($_POST['btn-send'])) {

    $sendTo = $_POST['sendto'];
    $sendTo = strip_tags($sendTo);
    $sendTo = htmlspecialchars($sendTo);

    $message = $_POST['message'];
    $message = strip_tags($message);
    $message = htmlspecialchars($message);

    $subject = $_POST['subject'];
    $subject = strip_tags($subject);
    $subject = htmlspecialchars($subject);

    if(empty($message)) {
        $error = true;
        $errorMessage = 'Please enter text message';
    }

    if(empty($sendTo)) {
        $error = true;
        $errorEmail = 'Please enter email you want to send to';
    }

    if(!$error){
        $sql = "insert into general_announcement(id, message_title, message_body, sender, receiver, date)
                values(NULL, '$subject', '$message', '$sender', '$sendTo', CURRENT_TIMESTAMP)";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'message sent successfully.';
        }
    }
}

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
            <center><h2>Compose message</h2></center>
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
                <label for="sendto" class="control-label">Send To</label>
                <input type="text" name="sendto" class="form-control" autocomplete="off">
                <span class="text-danger"><?php if(isset($errorEmail)) echo $errorEmail; ?></span>
            </div>
            <div class="form-group">
                <label for="subject" class="control-label">subject</label>
                <input type="text" name="subject" class="form-control">
            </div>


            <div class="form-group">
                <label for="message" class="control-label">message</label>
                <textarea autofocus wrap="soft" name="message" class="form-control"></textarea>
                <span class="text-danger"><?php if(isset($errorMessage)) echo $errorMessage; ?></span>
            </div>

            <div class="form-group">
                <center><input type="submit" name="btn-send" value="Send message" class="btn btn-primary"></center>
            </div>
            <hr/>
            <a href="logout.php">Logout</a>
        </form>
    </div>
</div>
</body>
</html>