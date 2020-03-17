<?php
$first = 5;
$second = 10;
echo 'first' .':'. $first .'<br/>';
echo 'second' .':'. $second .'<br/>';
[$first,$second]=[$second,$first];
echo 'first' .':'. $first .'<br/>';
echo 'second' .':'. $second .'<br/>';