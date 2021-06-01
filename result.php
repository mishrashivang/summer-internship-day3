<?php

$a=$_POST['name'];
$c=$_POST['dob'];
$d=$_POST['mobile'];
$e=$_POST['num1'];
$f=$_POST['num2'];
$g=$_POST['num3'];
$h=$_POST['num4'];
$i=$_POST['num5'];

echo "student name is $a";
echo "student dob is $c";
echo "student mobile is $d";
echo "student java marks  is $e";
echo "student .net marks is $f";
echo "student php marks is $g";
echo "student c++ marks  is $h";
echo "student c# marks  is $i";
echo "total is ".($e+$f+$g+$h+$i);
$total=$e+$f+$g+$h+$i;

if($total>50)
{
    echo "thired rank";
}
elseif($total>65)
{
    echo "second rank";
}
elseif($total>80)
{
    echo "first rank";

}
else
{
    echo "fail";
}
?>
