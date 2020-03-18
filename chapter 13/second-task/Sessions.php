<?php


class Sessions
{

    private $setting;

    public function set($session)
    {
        $this->setting = $session;
        if (!isset($_SESSION[$this->setting])) {
            $_SESSION[$this->setting] = 0;
        } else {
            $_SESSION[$this->setting]++;
        }
    }

    public function get()
    {
        return session_id($this->setting);
    }

    public function listKeys()
    {
        return $_SESSION;
    }

    public function existsKey($session)
    {
        return isset($_SESSION[$session]) ? false : true;
    }
}

$object = new Sessions();

$object->set('count');
$object->set('count');
$object->set('count');
$object->set('abs');

print_r($object->listKeys());


