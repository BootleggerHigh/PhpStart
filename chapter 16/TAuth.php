<?php


trait TAuth
{
    public function auth($authuser){
        session_start();
        $_SESSION[key($authuser)] = array_values($authuser);
        return true;
    }
    public function is_auth($email){
        return isset($_SESSION[$email]) && !empty($_SESSION[$email])? "Да" : "Нет";
    }
}


