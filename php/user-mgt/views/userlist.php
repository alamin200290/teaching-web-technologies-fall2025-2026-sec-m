<?php
    require_once('../controllers/authCheck.php');

    $users = [
        ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=> 'alamin@aiub.edu'],
        ['id'=>2, 'username'=>'xyz', 'password'=>'1212343', 'email'=> 'xyz@aiub.edu'],
        ['id'=>3, 'username'=>'abc', 'password'=>'qwe', 'email'=> 'abc@aiub.edu'],
        ['id'=>4, 'username'=>'pqr', 'password'=>'123', 'email'=> 'pqr@aiub.edu']
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Userlist Page</title>
</head>
<body>
        <h1> User List</h1>

        <a href="home.php">Back </a> |
        <a href="../controllers/logout.php">logout </a> 

        <br>
        <br>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>USERNAME</td>
                <td>EMAIL</td>
                <td>ACTION</td>
            </tr>
            <?php 
                foreach($users as $u){
            ?>
             <tr>
                <td><?php echo $u['id'];?></td>
                <td><?php echo $u['username'];?></td>
                <td><?=$u['email']?></td>
                <td>
                    <a href='edit.php?id=<?=$u['id']?>'> EDIT </a> | 
                    <a href='delete.php?id=<?=$u['id']?>'> DELETE </a> |
                    <a href='details.php?id=<?=$u['id']?>'> Details </a>
                </td>
            </tr>

            <?php } ?>
        </table>    
</body>
</html>