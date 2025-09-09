<!-- Create a PHP script that calculates whether a given number is divisible 
by both 3 and 5, only 3, only 5, or neither.-->
<?php
$var1=20;
if($var1%3==0 && $var1%5==0){
    $both="This number is divisible by 5 and 3";
}
elseif($var1%3==0){
    $both="This is divisible by 3";
}
elseif($var1%5==0){
    $both="This is divisible by 5";
}
else{
    $both="The above number cannot be divisible neither by 3 nor by 5.";
}

echo $both;
?>