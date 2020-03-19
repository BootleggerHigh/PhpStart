<?php

include_once 'AttributeException.php';
include_once 'PasswordException.php';

class Users
{
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    public function __construct($first_name,$last_name,$email=null,$password=null)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }
    public function __get($index){
        if ($index === 'password'){
            throw new PasswordException;
        }
        if(isset($this->index)){
            return $this->index;
        }
        else{
            throw new AttributeException($this->index);
        }
    }
    public  function  __set($name, $value)
    {
        if(isset($this->name))
        {
            $this->name=$value;
        }
        else {
            throw  new AttributeException;
        }
    }
    public function  isPasswordObject($password)
    {
        return $this->password = $password;
    }
}