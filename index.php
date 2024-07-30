<?php
    table();

    // $txt=5;
    // $t2=10;
    // $mk = "Hi mohit";
    // echo $txt;
    // echo $t2;
    // echo '<br>';

    // // function in php 

    // function name(){
    //     echo "1. My name is Moin khan";    
    //     echo '<br>';
    //     echo"2. Hello nagpur walo";
    //     echo "<br>";
    // }
    // name();

    // function multiply(){
    //     // keyword  = global 
    //     global $txt ,$t2,$t3;
    //     $t3= $txt * $t2;
    // }

    // multiply(); //run the function 
    // echo $t3;
    // echo '<br>';


    // echo $mk;
    // echo "Moin khan 21 34 5 6";

    // echo "khan the great ";
    // echo '<br>';
    // print "hello"; 
    // echo '<br>';

    // datatypes

    $r = array("moin", "khan", "20", "nagpur");
    var_dump($r);
    echo '<br>';

    $wr = null;
    var_dump($wr);
    echo '<br>';
    echo '<br>';
    echo '<br>';


    $ab = "qwertytuiop";
    $wr = "asdfghjkl";

    echo "CONCATINATION ";
    echo '<br>';

    $xy = "$ab $wr";
    echo $xy;
    echo '<br>';
    echo '<br>';
    echo '<br>';

    var_dump($wr);
    echo '<br>';

    echo "53 $wr";
    echo '<br>';

    echo strlen($wr);
    echo '<br>';
    echo str_word_count($wr);
    echo "<br>";

    echo strtoupper($wr);
    echo strtolower($wr);
    echo "<br>";

    echo str_replace("qwertytuiop", "hello", $wr);
    echo "<br>";
    echo strrev($wr);

    echo "<br>";
    $num = "12345";
    var_dump($num);
    echo "<br>";

    $num1 = 123.2;
    $num1 = (int) $num1;
    var_dump($num1);
    echo "<br>";

    define("hello", "this is the php language!");
    echo hello;
    echo "<br>";

    $x = 5;
    $y = 6;


    $name = "moin21";
    echo $check = $name == "moin" ? "yes" : "not good";
    echo "<br>";
    echo "<br>";


    // if ($y<7)  {  
    //     echo "passsed";
    // }else if(5==7){
    //     echo"failed";
    // }else {
    //     echo "no condition satisfied";
    // }

    // $name = "moin23";
    // switch($name){
    // case 'moin21':
    // case 'moin22':
    //     echo "my name is Moin22 khan";
    //     break;
    // case 'moin23':
    //     echo "my name is Moin23 khan";
    //     break;
    // case 'moin24':
    //     echo "my name is Moin24 khan";
    //     break;
    // default:
    // echo "Sorry better next time";
    // }


    //functions in php
    function table()
    {
        $i = 1;

        echo "The 10 table is : ";
        echo "<br>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
            $s = 10 * $i;
            echo $i . " x 10 = " . $i;
            echo "<br>";
        }
    }
    table();

    echo "Enter an integer: ";
    $input = fgets(STDIN);
    $integer = (int)$input; // Convert the input to an integer

    echo "You entered: $integer\n";



    ?>
