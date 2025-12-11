<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
function isPrime($number)//3
{
    if($number<2)
    {
        return "Not Prime";
    }
$m=round($number/2);
for($i=2;$i<=$m;$i++)
{
    if($number%$i==0)
    {
        return "Not Prime";
    }
  
}
return "Prime";

}

 echo(isPrime(3));
 echo"<hr>";
 function Reverse($str)
 {
    $Rev="";
    for($i=strlen($str)-1;$i>=0;$i--)
        {
$Rev.=$str[$i];
        }
        return $Rev;
 }
 echo Reverse("saja");
  echo"<hr>";
function wisLower($str)
{
     if($str === strtolower($str)) {
        return "Your String is Ok";
    } else {
        return "Your String is NOT Ok";
    }
}
echo wisLower ("remove");
 echo"<hr>";
 function Swap($num1,$num2)
 {
    $temp=$num1;
    $num1=$num2;
    $num2=$temp;
    echo("number 1 = ".$num1."<br>"."Number 2 =".$num2);
 }
 echo Swap(10,5);
  echo"<hr>";
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;

    while($temp > 0) {
        $digit = $temp % 10;         
        $sum += $digit ** 3;           
        $temp = (int)($temp / 10);     
    }

    if($sum == $number) {
        return "$number is an Armstrong number";
    } else {
        return "$number is NOT an Armstrong number";
    }
}
 echo"<hr>";


function isPalindrome($str) {
    $cleaned = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    
    $reversed = strrev($cleaned);
    
    if($cleaned === $reversed) {
        return "Yes, it is a palindrome";
    } else {
        return "No, it is not a palindrome";
    }
}


$input = "Eva, can I see bees in a cave?";
echo isPalindrome($input);
 echo"<hr>";
 function RemoveDuplicate($arr)
 {
    $Newarr=[];
   foreach($arr as $value) {
        if(!in_array($value, $Newarr)) 
        { 
            $Newarr[] = $value;          
        }
    }
    return $Newarr;
 }
$result= RemoveDuplicate([2, 4, 7, 4, 8, 4]);
print_r($result);
?>