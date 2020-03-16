<?php

class Point
{
    function distance($x1=10,$x2=10,$y1=10,$y2=10,$z1=0,$z2=0){
        return sqrt(( ($x2-$x1)**2) +(($y2-$y1)**2)  + (($z2-$z1)**2));
    }
}