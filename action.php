<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "Data use POST";
    $email=$_POST['email'];
      $password = $_POST['password'];

}
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Data sent using GET <br>";

    $email = $_GET['email'];
    $password = $_GET['password'];
}