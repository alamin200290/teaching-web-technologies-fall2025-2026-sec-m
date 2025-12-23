<?php
    //include('authCheck.php');
    //include_once('authCheck.php');
    //require('authCheck.php');
    require_once('../controllers/authCheck.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1> Welcome home! <?php echo $_SESSION['username'];?> </h1>

        <a href="userlist.php">User list </a> |
        <a href="../controllers/logout.php">logout </a> 

</body>
</html>