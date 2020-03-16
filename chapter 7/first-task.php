<?php
$start_fibbi = 1;
$next_fibbi = 2;
echo <<<TAG
1. 0 <br/>
2. 1 <br/>
TAG;
for($i=2; $i < 200; $i++){
    echo ($i+1).'. '. $start_fibbi .'<br/>';
    $current = $next_fibbi += $start_fibbi;
    $start_fibbi = $current - $start_fibbi;

}