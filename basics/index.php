<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "abdul haseeb";
    echo "hey how are you i am haseeb"."<br>";
    print "i am 16 year old"."<br>";

    define("name","haseeb");
    echo name;

    // ARTHMATIC OPERATERS
    
    // ADD

    $num1 = 4;
    $num2 = 6;
    
    $add = $num1 + $num2;
    echo "<br>".$add;
    
    // SUB
    
    $num1 = 4;
    $num2 = 6;
    
    $sub = $num1 - $num2;
    echo "<br>".$sub;
    
    // MUL
    
    $num1 = 4;
    $num2 = 6;
    
    $mul = $num1 * $num2;
    echo "<br>".$mul;
    
    // div
    
    $num1 = 4;
    $num2 = 6;
    
    $div = $num1 / $num2;
    echo "<br>".$div;
    
    // ARTHMATIC OPERATERS END

    // STRING FUNCTIONS
    
    echo "<br>"."Name length: ".strlen($name);
    echo "<br>"."Name word length: ".str_word_count($name);
    
    $sentence = "A quick brown fox jumps over the lazy dog";
    
    echo "<br>".$sentence;
    echo "<br>".str_replace('brown','black',$sentence);
    echo "<br>".strrev($sentence)."<br>";
    
    // STRING FUNCTIONS END

    // RELATIONAL OPERATER
    
    $num3 = 5;
    $num4 = 9;

    // echo $num3 == $num4."<br>";
    // echo $num3 === $num4."<br>";
    // echo $num3 != $num4."<br>";
    // echo $num3 !== $num4."<br>";
    // echo $num3 > $num4."<br>";
    // echo $num3 < $num4."<br>";
    // echo $num3 >= $num4."<br>";
    echo $num3 <= $num4."<br>";
    
    
    // RELATIONAL OPERATER END
    
    // LOGICAL OPERATER
    
    $num5 = 3;
    $num6 = 5;

    // echo "<br>".$num5 >= $num6 && $num5 != $num6;
    // echo "<br>".$num5 >= $num6 || $num5 != $num6;
    echo "<br>".(!($num5 > $num6));
    
    // LOGICAL OPERATER END
    
    ?>
</body>
</html>