<?php
    session_start();
    //print_r($_POST);
    //var_dump($_GET);
    //echo 
    //print();

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "" || $password == "" || $email == ""){
            echo "null submission!";
        }else{

            $user = ['username'=>$username, 'password'=>$password, 'email'=> $email];
            //$users = [];
            //array_push($users, $user);

            $_SESSION['user'] = $user;
            header('location: ../views/login.php');
        }
    }else{
        //echo "please login first!";
        header('location: ../views/login.php');
    }


?>