<?php
if (!empty($_POST)){
    file_put_contents('content.txt',trim(htmlspecialchars($_POST['text'])));
    echo 'Успех!';
}