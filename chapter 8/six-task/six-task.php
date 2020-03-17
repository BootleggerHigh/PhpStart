<?php
$array_month = [];
$date = new  DateTime();
$date->setDate(2020,12,1);
//На запись месяцев
for ($i = 0; $i < 12; $i++) {
    $date->modify( 'first day of next month' );
    $array_month[] =$date->format( 'F' );
}
$string_month = serialize($array_month);
file_put_contents("month.txt", join(', ',$array_month));
//На вывод месяцев
$f_array = file("month.txt");
foreach ($f_array as $value){
    echo '<br/>'.$value.'<br>';
}