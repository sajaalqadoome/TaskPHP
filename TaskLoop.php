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
//1
for($i=1;$i<=10;$i++)
{
    if($i<10)
   {
   echo $i."-";
   }
    else
    {
        echo $i;
    }
}
echo "<hr>";
//2
$sum=0;
for($i=0;$i<30;$i++)
{
  $sum+=$i;
}
 echo $sum;
 echo "<hr>";
 for($i=0;$i<5;$i++)
 {
     echo "<br>";
     for($j=0;$j<5;$j++)
     {
        if($i==0)
        {
            echo " A ";
        }
        else if($i==1)
          {echo ($j<3 ?"A " : "B ");}  
       else if($i==2)
         {echo ($j<2 ?"A " : "C " );}
else if($i==3)
         {echo ($j<1 ?"A " : "D ");}
else if($i==4)
         {echo "E ";}
     }
 }
  echo "<hr>";
for($i=0;$i<5;$i++)
 {
     echo "<br>";
     for($j=0;$j<5;$j++)
     {
        if($i==0)
        {
            echo " 1 ";
        }
        else if($i==1)
          {echo ($j<3 ?"1 " : "2 ");}  
       else if($i==2)
         {echo ($j<2 ?"1 " : "3 " );}
else if($i==3)
         {echo ($j<1 ?"1 " : "4 ");}
else if($i==4)
         {echo "5 ";}
     }
 }
  echo "<hr>";
  for($i=1;$i<=5;$i++)
 {
     echo "<br>";
     for($j=1;$j<=5;$j++)
     {
        if($i==$j)
        {
            echo $j;
        }
        else
        {
            echo "0";
        }
 }
}
  echo "<hr>";
 
  $fac=1;
  for($i=5;$i>=1;$i--)
  {
$fac*=$i;

  }
echo $fac;
echo "<hr>";
$first=0;
$sec=1;
echo $first . ",". $sec;
for($i=2;$i<10;$i++)
{
$third=$first+$sec;
$first=$sec;
$sec=$third;
echo ",".$third;
}
echo "<hr>";
$text = "Orange Coding Academy";
$count = substr_count(strtolower($text), "c");
echo $count;
echo "<hr>";
 echo'<table border="1">';
for($i=1;$i<=6;$i++)
{
    echo "<tr>";
    for($j=1;$j<=6;$j++)
{
     $product = $i * $j;
   echo "<td>$i * $j = $product</td>";
}
echo "</tr>";
}
echo '</table>';
echo "<hr>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz".",";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>".",";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>".",";
    } else {
        echo $i . ",";
    }
}
echo "<hr>";
$num=1;
for($i=1;$i<=5;$i++)
{ 
for($j=1;$j<=$i;$j++)
{
    echo $num." ";
    $num++;

    
}
echo "<br>";
}
echo "<hr>";
$year=2014;
if($year%4==0);
{
    echo "This year is not a leap year’";
}
echo "<hr>";
$temp=27;
if($temp>20)
{
    echo "Summer";
}
else
{
    echo "Winter";
}
echo "<hr>";
$num1=10;
$num2=10;
if($num1!=$num2)
{
    echo $num1+$num2;
}
elseif($num1==$num2)
{
    echo($num1+$num2)*3;

}
echo "<hr>";
$numx=10;
$numy=20;
if($numx+$numy==30)
{
    echo"The Sum is =".($numx+$numy);
}
else
{
    echo "False";
}
echo "<hr>";

$positveNumber=9;
if($positveNumber>0 &&$positveNumber%3==0)
{
    echo "true";
}
else
{
    echo "False";
}
echo "<hr>";
$numberinRange=30;
if($numberinRange>20 && $numberinRange<50)
{
    echo "true";
}
else
{
    echo "False";
}
echo "<hr>";
$arrayNumber=[ 1, 5, 9 ];
$max=$arrayNumber[0];
for($x=1;$x<count($arrayNumber);$x++)
{
    if($arrayNumber[$x]>$max)
    {
        $max=$arrayNumber[$x];
    }
    
}
echo$max;
echo "<hr>";


$units = 50; 
$rate_first_50 = 2.50;
$bill = 0;

if($units <= 50){
    $bill = $units * $rate_first_50;
} else {
    $bill = 50 * $rate_first_50;
}

echo "Electricity Bill = " . $bill . " JOD";


echo "<hr>";
$num1 = 10;
$num2 = 5;
$operation='multi';
switch($operation)
{
    case 'add':
      echo  $num1+$num2;
        break;
     case 'sub':
        echo   $num1-$num2;
        break;   
      case 'multi':
        echo   $num1*$num2;
        break;
         case 'div':
          echo $num1/$num2;
        break; 
}
echo "<hr>";
$numberwhether=-60;
if($numberwhether>0)
{
    echo "Positive";
}
else
{
     echo "Negative";
}
echo "<hr>";
$calcAvg=array(60,86,95,63,55,74,79,62,50);
$sumAvg=0;
$total=0;
for($x=0;$x<count($calcAvg);$x++)
{
    ($sumAvg+=$calcAvg[$x]);
}
 $total= $sumAvg/count($calcAvg);
if($total<60)
{
    echo'F';
}
elseif($total<70)
{
   echo 'D';
}
elseif($total<80)
{
    echo'c';
}
elseif($total<90)
{
   echo 'B';
}
elseif($total<100)
{
 echo   'A';
}
?>
