<?php
    function sum(...$array_number){
        return array_sum($array_number);
    }

    if(function_exists('sum')){
        $result = sum(1,2,3,4);
        echo $result;
    }