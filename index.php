<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning</title>
</head>

<body>
    <!-- Its a comment for html line -->
    <h1> Hello world!</h1>

    <?php

    //ist test with php
    echo 'Hello World!';
    echo '<br>';
    //variable
    $x = 5;
    $y = 'test';
    echo $x . $y;

    //test vardump();
    echo '<br>';
    $x = "Hello !";
    $y = ' Worldd!';

    var_dump($x);
    echo "<br>";
    var_dump($y);

    //To concatenate, or combine, two strings we can use the "." operator
    $a = 'hello';
    $b = 'world';
    echo "<br>";
    echo $a . $b;

    //when i concatenate with ths space betwen two word
    echo "<br>";
    echo $a . " " . $b;

    echo '<hr>';
    //testing again...
    //Data types
    $a = 'Ruhul';
    echo $a . "<br>"; // this way we can add br tag for next line
    $b = 6;
    echo $b . "<br>";
    $c = 1.5;
    echo $c . "<br>";
    $d = true;
    echo $d . '<br>';

    //array test to show all data
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $car) {
        echo $car . "<br>";
    }

    //index array
    $indexa = ["One", "Two", "Three"];
    echo $indexa[0] . '<br>';

    //To Change the Velue in array
    $changeArry = ["Lalmonirhat", "Dhaka", "Rangpur"];
    $changeArry[1] = "Kurigram";
    echo $changeArry[1] . '<hr>';

    //testing To show all data in array
    $tests = ["Fifty", "Twenty", "Ten"];
    foreach ($tests as $test) {
        echo $test . '<br>';
    }
    //index array
    $ttt = ["A", "B", "C", "D"];
    echo $ttt[3] . '<br>';

    //To show all Item in Array
    foreach ($ttt as $tt) {
        echo $tt;
    }



    $associtveArry = ["Name" => "Tomas", "Age" => "40", "NickName" => "TTTT"]; {
        //To Show a fix data like only show name 
        echo "Tomas is " . $associtveArry['Age'] . " years old.";
    }
    //Assosiative array To show All data
    $associtveArry_test = ["Name" => "Tomas", "Age" => "40", "NickName" => "TTTT"];
    foreach ($associtveArry_test as $hh => $yy) {
        echo "$hh : $yy" . '<br>';
    }

    ?>
</body>

</html>