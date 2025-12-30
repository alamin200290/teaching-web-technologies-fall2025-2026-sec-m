<?php
    session_start();
    require_once('../models/userModel.php');
    //print_r($_POST);
    //var_dump($_GET);
    //echo 
    //print();

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "null submission!";
        }else{

            $user = ['username'=> $username, 'password'=>$password];
            $status = login($user);
            if($status){
                setcookie('status', 'true', time()+3000, '/');
                $_SESSION['username'] = $username;
                header('location: ../views/home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        //echo "please login first!";
        header('location: ../views/login.php');
    }


?>