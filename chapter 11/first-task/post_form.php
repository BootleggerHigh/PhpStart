<?php
$data = null;
    if(!empty($_POST))
    {
        htmlspecialchars((string)$_POST);
        $data = $_POST;
    }

    $value = array_values($data);
    echo 'Результат : '.sqrt((($value[1]-$value[0])**2) + (($value[3]-$value[2])**2));