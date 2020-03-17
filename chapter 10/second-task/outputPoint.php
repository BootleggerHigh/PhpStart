<?php

$file = file_get_contents("point.txt");
$un_file = unserialize($file);
echo  "Десериализация успешна<br/>";
print_r($un_file);