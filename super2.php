<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $url = $_POST['url'] ?? '';

    if (!preg_match("/^https?:\/\//", $url)) {
        $url = "https://" . $url;
    }

    header("Location: $url");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Engine</title>
</head>
<body>

<form method="post">
    <input type="text" name="url">
    <button type="submit">Go</button>
</form>

</body>
</html>
