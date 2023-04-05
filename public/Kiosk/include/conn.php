<?php

$dbhost = "127.0.0.1";
$dbuser = "u245810598_primyiradmin";
$dbpass = "Primyirpass01";
$db = "u245810598_primyir";

$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(!$conn){
    echo "Connection Failed!";
}

?>