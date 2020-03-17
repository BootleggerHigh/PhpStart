<?php
$value = [];
if(!empty($_POST)){
    $value = $_POST;
}
$file = file_get_contents("list.txt");

$list_array = str_split($file);

$value_check = array_values($value);

$index = array_search($value_check[0], $list_array);

unset($list_array[$index]);

file_put_contents("list.txt",$list_array);
echo 'Успешно удален! - '.$value_check[0];