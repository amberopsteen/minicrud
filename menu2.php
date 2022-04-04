<?php

include_once("includes/connect.php");


$sql = "SELECT * FROM menu ORDER BY soort_gerecht DESC";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$vlees = [];
$vis = [];
$groente = [];

foreach ($result as $menu) {
switch ($menu['soort_gerecht']) {
case 'vlees':
array_push($vlees, $menu);
break;
case 'vis':
array_push($vis, $menu);
break;
case 'groente':
array_push($groente, $menu);
break;
default:
break;
}
}
?>