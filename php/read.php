<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include ('connect.php');

$query = "SELECT * FROM programmeerlessen ORDER BY id";
$result = $mysqli -> query($query);
$lessen = "[";
while ($record = $result -> fetch_array(MYSQLI_ASSOC)) {
    if ($lessen != "[") {$lessen .= ",";}
    $lessen .= '{"id":' . $record["id"] . ',';
    $lessen .= '"lescode":"' . $record["lescode"] . '",';
    $lessen .= '"link":"' . $record["link"] . '",';
    $lessen .= '"groep":"' . $record["groep"] . '",';
    $lessen .= '"versie":"' . $record["versie"] . '",';
    $lessen .= '"plugged":"' . $record["plugged"] . '",';
    $lessen .= '"www":"' . $record["www"] . '",';
    $lessen .= '"visueel":"' . $record["visueel"] . '",';
    $lessen .= '"inloggen":"' . $record["inloggen"] . '",';
    $lessen .= '"nederlands":"' . $record["nederlands"] . '",';
    $lessen .= '"niveau":"' . $record["niveau"] . '",';
    $lessen .= '"readme":"' . $record["readme"] . '"}';
}
$lessen .="]"; 


// Output
$output = '{"lessen":' . $lessen . '}';
$mysqli -> close();
echo $output;