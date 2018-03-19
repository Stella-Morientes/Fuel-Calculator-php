<?php
$distance = $_POST['distance'];
$cost = $_POST['cost'];
$con = $_POST['consume'];
$calc1 = $distance/100;
$calc2 = $calc1*$con;
$calc3 = $calc2*$cost;
echo "Total cost -->";
echo $calc3;
 ?>
