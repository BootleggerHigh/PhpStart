<?php
$date = new DateTime();
$date->format('Y-m-d-h-i-s');
$file = file_get_contents($date->format('Y-m-d-h-i-s'));
$file.= mt_rand(0,PHP_INT_MAX);
file_put_contents($date->format('Y-m-d-h-i-s'),$file);