<?php

function check_current($price){
    return preg_match('/^\d+(\.\d\d)?$/',(float)$price) ? (float)$price : '';
}

function checkCorrect($array)
{
    $flags = true;
    foreach ($array as $key => $values) {
        if (!$values) {
            echo 'Неверно введены данные : ' . $key . '<br/>';
            $flags = false;
        }
    }
    return $flags;
}

$format = array (
    'count_product' => array('filter'=>FILTER_VALIDATE_INT,),
    'price_product' => array('filter'=>FILTER_CALLBACK,"options"=>"check_current"),
);


$values = filter_input_array(INPUT_POST,$format);

if (checkCorrect($values)){
   echo 'Произведение двух чисел : '.$values['count_product'] * $values['price_product'];
}