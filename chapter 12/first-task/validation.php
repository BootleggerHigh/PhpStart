<?php

function checkSymbols($value)
{
    if (strlen($value) > 2 && strlen($value) < 20) {
        return preg_match('/[А-Яа-яЁё]/u', $value) ? $value : '';
    }
    return '';
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


$filter = array(
    'email' => array("filter" => FILTER_VALIDATE_EMAIL,),
    'firstname' => array("filter" => FILTER_CALLBACK, "options" => "checkSymbols"),
    'lastname' => array("filter" => FILTER_CALLBACK, "options" => "checkSymbols"),
);


$value = filter_input_array(INPUT_POST, $filter);

$good_data = [];

if (checkCorrect($value)) {
    $data = file("users.txt");
    $good_data = $value;
    $json_data =json_encode($good_data,JSON_UNESCAPED_UNICODE);
    if(!in_array($json_data,$data)){
        file_put_contents("users.txt",PHP_EOL .$json_data,FILE_APPEND);
        echo 'Данные добавлены';
    }
    else{
        echo 'Дублирующиеся данные';
    }
}


