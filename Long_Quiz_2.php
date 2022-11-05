<?php
echo "Del Rosario, Lance G.<br> 202013772<br><br>";
echo "<b>Problem 1. Create a PHP program that will perform the following mathematical operations, to produce the required output.</b><br>
Given the following values:<br>
Salary_rate = 600/day<br>
Salary = Salary_rate*15 days<br>
Taxable_amount = 30% of Salary<br>
Net_pay = Salary - Taxable_amount<br>
<br><br>";

echo "<b>Answer</b><br><br>";
$Salary_rate = 600;
$Salary = $Salary_rate * 15;
$Taxable_amount = $Salary * 0.30;
$Net_pay = $Salary - $Taxable_amount;

echo "Salary rate: ", $Salary_rate,"<br>";
echo "Salary per 15 days: ", $Salary,"<br>";
echo "Taxable amount: ", $Taxable_amount,"<br>";
echo "Net pay: ", $Net_pay,"<br><br><br>";

echo "<b>Problem 2.Create a PHP program that will add all positive integers from 1-50 using loop statement.</b><br><br>";
echo "<b>Answer</b><br>";

$a = 0;
for ($i = 1; $i<=50;$i++)
{
    $a += $i;
}
echo $a;

?>