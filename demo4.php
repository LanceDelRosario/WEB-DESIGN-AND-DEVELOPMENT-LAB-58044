<?php

    echo "While Loop<br>";

    $fuel = 10;
    while($fuel > 1)
    {
        echo "There's enough fuel.<br>";
        $fuel=$fuel-1;
    }

    echo "<br>";
    echo "Do-While Loop<br>";
    $count=1;

    do

        echo "$count times 12 is ", $count*12,"<br>";
    while(++$count <=12);

    echo "<br>";
    echo "For-Loop<br>";

    for ($count=1; $count<=12; ++$count)

        echo "$count times 12 is ", $count*12,"<br>";

    echo "<br>";
    echo "Foreach Loop<br>";

    $colors = array("red","green","blue","yellow");
    foreach ($colors as $value)
    {
        echo "$value<br>";
    }

    echo"<br>";
    echo "Break Statement<br>";

    for ($x = 0; $x < 10; $x++)
        {
            if ($x == 4)
            {
                break;
            }
            echo "The number is: $x<br>";
        }

    echo "<br>";
    echo "Continous Statement<br>";

    for ($x = 0; $x < 10; $x++)
    
    {
        if ($x == 4)
        {
            continue;
        }
        echo "The number is: $x<br>";
    }


    echo "<br>Application 1<br>";

    $a = "Hello";

    for ($b = 0; $b <= 10; $b++)
    {
        echo "$a ", $b,"<br>";
    }

    echo "<br>Application 2<br>";

    for($c = 3; $c < 10; $c++)
    {
        echo "$c<br>";
    }
?>