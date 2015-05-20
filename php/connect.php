<?php
$server = "localhost";
$gebruiker = "root";
$wachtwoord = "root";
$db = "bit-kids";

$mysqli = mysqli_connect($server,$gebruiker,$wachtwoord, $db); 
if($mysqli->set_charset("utf8"))
{
    
}

?>