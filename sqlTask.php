<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="task1.php" method="post">
        <label>
            <input type="text" name="name">
        </label>
        <button type="submit" value="send">sent</button>
    </form>
</body>
</html>

<?php
echo phpversion();

echo "<hr>";
echo "Tomorrow I'll learn PHP global variables." . "\n";
echo "This is a bad command : del c:\\*.*" . "\n";
echo "<hr>";
if (isset($_POST['name'])) {
    echo "Your name is: " . $_POST['name'];
}
echo "<hr>";
echo $_SERVER['REMOTE_ADDR'];
echo "<hr>";
echo "current file namee :".basename($_SERVER['PHP_SELF']);
//6
echo "<hr>";
$url='https://www.w3resource.com/php-exercises/php-basic-exercise-8.php';
$url=parse_url($url);
print_r($url);
echo "<hr>";
//7
 $txt='php Tutorial';
 $text = preg_replace('/(\b[a-z])/i', '<span style="color:green">$1</span>', $txt);

echo $text;
echo "<hr>";
//8
 //header('Location:https://www.w3schools.com/php/php_file.asp');
 exit;