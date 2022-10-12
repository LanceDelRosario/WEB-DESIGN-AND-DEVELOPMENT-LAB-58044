<html>
    <body>
        <!-- Equality Operators -->
        <?php
         $month="December";  
         if($month == "December")
        {
            echo "It's Christmas Time";
        }
        else
        {
            echo "Abayga";
        }
        ?>
        <br>
        <!-- Inequality Operators -->
        <?php
         $a = "1000";
         $b = "+1000";
            if($a !=$b) echo "1";
            if($a !==$b) echo "2";
        ?>
        <br>
        <!-- Comparison Operators -->
        <?php
         $a ="2";
         $b = "3";
            if($a > $b) echo "a > b<br>";
            if($a < $b) echo "a < b<br>";
            if($a >= $b) echo "a >= b<br>";
            if($a <= $b) echo "a <= b<br>";
        ?>
        <!-- Logical Operators -->
        <?php
         $a = 1;
         $b = 0;
            echo ($a AND $b)."<br>";
            echo ($a or $b)."<br>";
            echo ($a XOR $b)."<br>";
            echo !$a."<br>";

        ?>
        <!-- If Statement -->
        <?Php
        $bank_balance = 99;
        if($bank_balance<100){

         $money = 1000;
         $bank_balance+=$money;
         echo $bank_balance;
        }
        ?>
    </body>
</html>