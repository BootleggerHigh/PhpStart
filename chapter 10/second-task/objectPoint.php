<?php

require_once 'Pointer.php';


$object = new Pointer();

$object->x = 1;
$object->y = 1;

file_put_contents("point.txt",serialize($object));
echo 'Серелизация объекта завершена.';