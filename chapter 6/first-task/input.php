<?php
$file = file_get_contents("hello.txt");

$file .= "Hello, world!";
file_put_contents("hello.txt",$file);