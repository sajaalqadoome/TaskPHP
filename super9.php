<?php

$cookie_name = "user";
$cookie_value = "Saja";

setcookie(
 $cookie_name,
    $cookie_value,
    time()+3600,
    "/",
    "",
    false,
    true);

    echo "<h3>All Cookies:</h3>";
if(count($_COOKIE) > 0) {
    echo "<ul>";
    foreach($_COOKIE as $name => $value) {
        echo "<li><strong>$name:</strong> $value</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No cookies found.</p>";
}


if(isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, "", time() - 3600, "/");
    echo "<p>Cookie '$cookie_name' has been deleted.</p>";
}