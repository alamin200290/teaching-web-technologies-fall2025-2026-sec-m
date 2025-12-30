<?php
    //print_r($_FILES);

    $src=  $_FILES['myfile']['tmp_name'];
    $ext = explode('.', $_FILES['myfile']['name']);
    $index = count($ext) -1;
    $name = time().".".$ext[$index];
    $des = 'upload/'.$name;

    if(move_uploaded_file($src, $des)) {
        echo "success";
    }else{
        echo "error";
    }

?>