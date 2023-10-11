<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    //Constants
    print("<br><br>Constants<br>");
    define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE"); // same thing as the previous line
    
    //Constants
    print("<br><br>Valid Constant<br>");
    // Valid constant names
    define("ONE", "first thing");
    define("TWO2", "second thing");
    define("THREE_3", "third thing");

    //Operator Types
    print("<br><br>Operator Types<br>");
    $a = 42;
    $b = 20;
    $c = $a + $b;
    echo "Addition Operation Result: $c <br/>";
    $c = $a - $b;
    echo "Subtraction Operation Result: $c <br/>";
    $c = $a * $b;
    echo "Multiplication Operation Result: $c <br/>";
    $c = $a / $b;
    echo "Division Operation Result: $c <br/>";
    $c = $a % $b;
    echo "Modulus Operation Result: $c <br/>";
    $c = $a++;
    echo "Increment Operation Result: $c <br/>";
    $c = $a--;
    echo "Decrement Operation Result: $c <br/>";

    print "END";
    ?>
</body>
</html>