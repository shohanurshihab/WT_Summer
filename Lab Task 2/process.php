<?php
$FL=$_POST["fn"];
$LN=$_POST["ln"];
$DS=$_POST["des"];
$PL =$_POST["prel"];
$em=$_POST["em"];
$pas=$_POST["pass"];

$pattern = "([0-9])";
if(preg_match($pattern, $FL))
{
    echo "First Name Contains Numbers<br>";
}
else
{
 echo $FL." ";
}
if(preg_match($pattern,$LN))
{
    echo "Last Name Contains Numbers <br>";
}
else
{
 echo $LN."<br>";
}
if(isset($DS))
{
    echo $DS."<br>";
}
else
{
    echo "DESIGNATION NOT SET<br>";
}
if($PL=="JAVA" || $PL=="C++" || $PL=="PHP")
{
    echo $PL."<br>";
}
else
{
    echo "PREFERRED LANGUAGE Not Selected<br>";
}
if(strlen($em)==0)
{
    echo "Must enter E-Mail<br>";
}
else
{
    echo $em."<br>"; 
}
if(strlen($pas)==0)
{
    echo "!!!Enter Password!!!<br>";
}
else if(strlen($pas)<7)
{
    echo "Password must be more than 6 characters<br>";
}
else
{
    echo $pas;
}


?>