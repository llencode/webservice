<?php
$server = "localhost";
$user = "id8972197_akademik";
$pass = "qwertyuiop";
$db = "id8972197_akademik";

$konek = mysqli_connect($server, $user, $pass, $db);

if (!$konek)
{
die('Could not connect: ' . mysql_error());
}
?>