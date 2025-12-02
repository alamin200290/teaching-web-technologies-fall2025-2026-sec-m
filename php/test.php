
<?php

    $name = "";
    $cgpa = 2.5;
    $id = 1;
    $email = "alamin@aiub.edu";

    $std = [1, "alamin", 3.5];
    $std[1];
    //$std = array(1, 'alamin', 3.5);
    $stds = [
        [1, "alamin", 3.5],
        [2, "alamin", 2.7],
        [3, "alamin", 2.5]
    ];
    $stds[2][2];

    $std = ['id'=>1, 'name'=>'alamin', 'cgpa'=>4.00];

    $std['cgpa'];

    $stds = [
        's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>4.00],
        's2'=>['id'=>2, 'name'=>'alamin', 'cgpa'=>4.00],
        's3'=>['id'=>3, 'name'=>'alamin', 'cgpa'=>4.00],
        's4'=>['id'=>4, 'name'=>'alamin', 'cgpa'=>4.00]
    ];

    //$stds[2]['cgpa'];
    $stds['s4']['cgpa'];

    function abc($a, $b){
        return $a+$b;
    }

    abc(10,20);

    for($i=0; $i<10; $i++){
        echo "<h1>".$name."</h1>";
    }

    // if(){

    // }else{

    // }

    //print('test');
    //echo "test {$name} abc";
    //$obj->
?>

<h2 style="color: red" onclick="alert('test')"> <?php if($name !==""){echo $name;}else{echo "null";} ?> </h2>

