<?php
require_once 'Point.php';

$object = new Point();
$result = $object->distance(5,0,5,4,8,3);

echo round($result,3);