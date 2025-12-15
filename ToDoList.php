<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
<input type="text" name="tasks">
<button type="submit">Add</button>
    </form>
</body>
</html>
<?php
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = trim($_POST['tasks']);
    if ($task != "") {
        $_SESSION['tasks'][] = $task;
    }
}
if (isset($_SESSION['tasks'])) {
     echo "<ul>";
    foreach ($_SESSION['tasks'] as $t) {

        echo "<li>$t</li>";
    }
}
?>