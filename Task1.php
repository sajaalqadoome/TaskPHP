<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
</html>
<?php


//1
$colors= ['red', 'green' ,'white' ];

$paragraph = "The memory of that scene for me is like a frame 
of film forever frozen at that moment: the " . $colors[0] . " carpet, the " 
.$colors[1]. " lawn, the " .$colors[2]. " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
//2 ul
echo 
"<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>";

//3
$cities= array( 
"Italy"=>"Rome", 
"Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", 
"Finland"=>"Helsinki", 
"France" => "Paris", 
"Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", 
"Greece" => "Athens", 
"Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", 
"Spain"=>"Madrid" ); 

asort($cities);
foreach($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
//4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo reset($color);
//5
$num=array(1,2,3, 4 ,5 );
$NewItem='$';
array_splice($num,3,0,$NewItem);

foreach($num as $item) {
    echo $item . " ";
}

//6
echo"<br>--------------------------------------------------<br>";
echo"Task 6  <br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo"<br>--------------------------------------------------<br>";

//7
echo"Task 7  <br>";
$temp=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$avg=0;
$sum=0;
for($x=0;$x< count($temp);$x++)
{
  $sum += ($temp[$x])/count($temp);

}

echo"The Avarage is =". $sum ."<br>";
asort($temp);            
$keys = array_keys($temp); 
echo "List of seven lowest temperatures: ";
for($i = 0; $i < 7; $i++) {
    echo $temp[$keys[$i]] . ", ";
}

echo "<br>";
sort($temp);
echo "List of seven highest temperatures";
for($i = count($temp)-1; $i >= count($temp)-7; $i--) {
    echo $temp[$i]. ", ";
}
echo"<br>--------------------------------------------------<br>";
//8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$New=array_merge($array1,$array2);
print_r($New)."<br>";
echo"<br>--------------------------------------------------<br>";
//9
$colors = array("red","blue", "white","yellow");
function ToUpper($arr)
{
$NweArryUpper=[];
foreach($arr as $value) {
       $NweArryUpper[] = strtoupper($value);
    }
    return $NweArryUpper;
}
$upperColors = ToUpper($colors);
print_r($upperColors);
echo"<br>--------------------------------------------------<br>";
//10
$colors = array("RED","BLUE", "WHITE","YELLOW");
function ToLower($arr)
{
$NweArryUpper=[];
foreach($arr as $value) {
       $NweArryUpper[] = strtolower($value);
    }
    return $NweArryUpper;
}
$upperColors = ToLower($colors);
print_r($upperColors);
echo"<br>--------------------------------------------------<br>";
//11
for($x=200;$x<=250;$x++)
{
if($x%4==0)
{
    echo $x.",";
}
}
echo"<br>--------------------------------------------------<br>";
//12
 $words =  array("abcd","abc","de","hjjj","g","wer");
 $lengths = array_map('strlen',  $words );
 $shortest_length = min($lengths);
 $longest_length = max($lengths);
 echo "Shortest string length: " . $shortest_length . "\n";
echo "Longest string length: " . $longest_length . "\n";
echo"<br>--------------------------------------------------<br>";
//13

$RandomNumber=range(11,20);
shuffle($RandomNumber);
$random10 = array_slice($RandomNumber, 0, 10);
print_r($random10);
echo"<br>--------------------------------------------------<br>";
//14
$array1 = array( 2, 0, 10, 12, 6,1);
$min=$array1[0];
for($x=0;$x<count($array1);$x++)
{
    if($array1[$x]!=0)
{
    if($array1[$x]<$min)
    {
        $min=$array1[$x];
    }
}

}
echo $min;
echo"<br>--------------------------------------------------<br>";

$cheakNumber=5;
if($cheakNumber>0)
{
    echo"<br>the number is positive";

}
elseif($cheakNumber<0)
{
 echo"<br> the number is Negative";
}
else
{
    echo "<br> Zero";
}
//2
$fruit="Apple";
switch($fruit)
{
    case "Apple":
        echo "<br>This is Apple";
        break;
        case "Orange":
        echo "This is Orange";
        break;
        case "Kiwi":
        echo "This is Kiwi";
        break;
}
//3
for($number=0;$number<20;$number++)
{
    if($number %2==0)
    {
        echo "<br>";
        echo $number;
        echo "<br>";
    }
}
//4
$movi=array("Inception","Interstellar","The Dark Knight","The Pursuit of Happyness","La La Land");
foreach($movi as $item) {
    echo $item . "<br> ";
}
//5
for($num=0;$num<10;$num++)
{
    if($num==5)
    {
        continue;
    }
    else if($num==8)
    {
        break;
    }
    echo $num ." ";
}



?>
