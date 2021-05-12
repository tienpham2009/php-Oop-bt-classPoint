<?php
use point\Point2D;
use point\Point3D;

include_once "point/Point2D.php";
include_once "point/Point3D.php";

$point2D = new Point2D(4,5);
echo $point2D;
$point3D = new Point3D(6,7,8);
echo "<br>";
echo $point3D;
echo "<br>";
echo implode(",",$point3D->getXYZ());
