<?php
require_once './Users.php';

try{
    try {
        $user = new Users(
            'Димон',
            'Покемон',
            'example.example@example.com',
            'qwerty12345'
        );
        echo $user->fdsfdf;
    }
    catch (Exception $exception)
    {
        echo 'Exception - исключение ' . get_class($exception).'<br/>';
        throw $exception;
    }
}
catch (AttributeException $exception)
{
    echo 'AttributeException: обращение к не существующему атрибуту: ',$exception->getMessage();
}
catch (PasswordException $exception)
{
    echo 'PasswordException : прямое обращение к password запрещенно ';
} finally {
    file_put_contents("exceptions.log",array($exception,$exception->getCode(),$exception->getMessage(),PHP_EOL),FILE_APPEND );
}