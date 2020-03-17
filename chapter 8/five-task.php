<?php
$my_array = [];
for ($i =0; $i <mt_rand(5,10); $i++){
    $my_array[] = mt_rand(0,100);
}
print_r($my_array);
echo '<br/><br/>';
sort($my_array);
print_r($my_array);