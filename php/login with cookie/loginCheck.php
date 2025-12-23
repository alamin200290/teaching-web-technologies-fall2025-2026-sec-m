<?php
    session_start();
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

            if($username == $password){
                //echo "valid user!";
                //$_SESSION['status'] = true;
                setcookie('status', 'true', time()+3000, '/');
                $_SESSION['username'] = $username;
                header('location: home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        //echo "please login first!";
        header('location: login.php');
    }


?>