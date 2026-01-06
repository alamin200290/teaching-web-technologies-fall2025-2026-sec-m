<?php
    $data = $_POST['user'];
    //$user = json_decode($data);
    $user = ['username'=> 'alamin', 'password'=> '124', 'email'=>'alamin@aiub.edu'];
    
    echo json_encode($user);
    
    //echo "Your username is : ".$user->username;

?>