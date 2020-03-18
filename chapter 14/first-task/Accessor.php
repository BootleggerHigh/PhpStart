<?php


class Accessor
{
    private $arr =  [];
    public function __get($key)
    {
        if(array_key_exists($key, $this->arr)){
            return $this->arr[$key];
        }
        else {
            return null;
        }
    }
    public function __set($key, $value)
    {
        $this->arr[$key]=$value;
    }
    public function __unset($key)
    {
        if(array_key_exists($key,$this->arr)){
            unset($this->arr[$key]);
        }
    }
}

$object = new Accessor;
$object->__set('Blow','Job');
$object->__get('Blow');
echo "Текущее значение : ".'<br/>';
print_r($object);
$object->__unset('Blow');
echo '<br/>'."После удаления: ".'<br/>';
print_r($object);