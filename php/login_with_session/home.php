<?php
    session_start();

    if(isset($_SESSION['status']) !== true){
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1> Welcome home! <?php echo $_SESSION['username'];?> </h1>

        <a href="logout.php">logout </a>
</body>
</html>