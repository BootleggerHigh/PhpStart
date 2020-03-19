<?php

require_once 'TAuth.php';
class UserAuth {
    private $auth = [];
    public function __set($email, $value)
    {
        $this->auth[$email] = $value;
    }

    public function _getUser()
    {
        return $this->auth;
    }
    public function __toString()
    {
        return "$this->auth";
    }
}

class AuthUs extends UserAuth
{
    use TAuth;
}

$object = new AuthUs();
$object->__set("Adolf","password");
$info = $object->auth($object->_getUser());
echo $info ? 'Пользователь аутентифицирован ' : 'Ошибка';
echo "<br/>Аутентификация пройдена : ".$object->is_auth("Adolf");

