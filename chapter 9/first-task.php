<?php
    function odd($number){
     return $number%2 === 0 ? true : false;
    }

    if(function_exists('odd')){
      $result = odd(3);
      echo $result ? 'Четное' : 'Нечетное';
    }