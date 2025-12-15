<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post">
    <label>First-Number<br>
    <input type="text" id="Fnumber" name="Fnumber">
    <br><br>
        <label>Secound-Number<br>
    <input type="text" id="Snumber" name="Snumber">
    <br><br>
    <input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p>
<input type="radio" name="group1" id="subtract" value="subtract"><p>-</p>
<input type="radio" name="group1" id="multi" value="multi"><p>x</p>
<input type="radio" name="group1" id="divide" value="divide"><p>/</p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>


   </form> 



</body>
</html>
<?php
$Fnumber = $_POST['Fnumber'];
$Snumber = $_POST['Snumber'];

"<p>The answer<p>";
if($_POST['group1']=="add")
{
    echo "$Fnumber"+"$Snumber";
}
else if($_POST['group1'] == "subtract") {
 echo "$Fnumber"-"$Snumber";
}
else if($_POST['group1'] == "multi") {
 echo "$Fnumber"*"$Snumber";
}
else if($_POST['group1'] == "divide"){
 echo "$Fnumber"/"$Snumber";
}
?>
