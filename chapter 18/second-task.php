<?php

function myError($errno,$errstr,$errfile,$errline,$errcontext)
{
    echo 'Ошибка : '.$errno.' '.$errstr.' '. $errfile.' '.$errline.' '.$errcontext;
    file_put_contents("errors.txt",array($errno,$errstr,$errcontext,$errline,$errfile,PHP_EOL),FILE_APPEND);
}

set_error_handler("myError");
$test = 2;
if ($test > 1) {
    trigger_error("Тут типа текст");
}