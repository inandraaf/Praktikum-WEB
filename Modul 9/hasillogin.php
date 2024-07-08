<?php 
session_start();
if (!isset($_SESSION['Username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body><center>
    <style>
        body{
            background-color: lavender;
        }
    </style>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <img src="25.jpg"
            style= "width: 500px; height: 400px;">
            <?php echo "<h1>Welcome To My Website, " . $_SESSION['Username']." Anda Sebagai, ".$_SESSION['Status']."!"."</h1>"; 
            ?> 
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body></center>
</html>