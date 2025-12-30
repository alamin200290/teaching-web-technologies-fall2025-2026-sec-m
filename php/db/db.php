<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    
    $sql2 = "insert into users values(null, 'alamin', '1234', 'email@aiub.edu')";
    if(mysqli_query($con, $sql2)){
        echo "success";
    }else{
        echo "error";
    }

    
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    

    // for($i=0;$i<$count; $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }


?>