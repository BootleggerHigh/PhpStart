<?php

class ComplexNumber

{
// operationComplexNumbers - заготовка. Где $operation - арифметическая операция;

    function operationComplexNumbers($x1,$x2,$y1,$y2,$operation){
        return ($x1 .$operation . $x2) .$operation . ($y1.$operation.$y2);
    }

}