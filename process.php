<?php 
$numA= $_POST["num1"];
$numB= $_POST["num2"];
$number1=(float)$numA;
$number2=(float)$numB;
$op=$_POST["sign"];
if($op=="+")
{
    echo $number1 + $number2;
}
else if($op=="-")
{
    echo $number1 - $number2;
}
else if($op=="*")
{
    echo $number1 * $number2;
}
else if($op=="/")
{
    echo $number1 / $number2;
}

?>