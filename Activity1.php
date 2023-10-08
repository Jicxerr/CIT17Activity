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
    # This is a comment, and
        # This is the second line of the comment
        // This is a comment too. Each style comments only
        print "An example with single line comments";

        //Variables
        //Integers
        $int_var = 12345;
        $another_int = -12345 + 12345;

        //Doubles
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print("$many + $many_2 = $few<br>");

        //String
        print("<br><br>STRING<br>");
        $string_1 = "This is a string in double quotes";
        $string_2 = "This is a somewhat longer, singly quoted string";
        $string_39 = "This string has thirty-nine characters";
        $string_0 = ""; // a string with zero characters
        print("$string_1");
        print("$string_2 ");
        print("$string_39");

        //Integers
        print("<br><br>INTEGERS<br>");
        $int_var = 12345;
        $another_int = -12345 + 12345;
        print($another_int);

        //Doubles
        print("<br><br>DOUBLES<br>");
        $many = 2.2888800;
        $many_2 = 2.2111200;
        $few = $many + $many_2;
        print("$many + $many_2 = $few<br>");

        //Boolean
        print("<br><br>BOOLEAN<br>");
        if (TRUE)
        print("This will always print<br>");
        else
        print("This will never print<br>");

        //Null
        print("<br><br>NULL<br>");
        $my_var = NULL;
        print($my_var);

        // multiply a value by 10 and return it to the caller
        print("<br><br>MULTIPLY<br>");
        function multiply ($value) {
            $value = $value * 10;
            return $value;
        }
            $retval = multiply (10);
            Print "Return value is $retval\n";

        

        echo "<br>";    
        echo "CIT17";
        echo "Hello World";
    ?>
</body>
</html>