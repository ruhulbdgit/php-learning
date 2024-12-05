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
    ?>


</body>

</html>