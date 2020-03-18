<?php


class Accessor implements JsonSerializable
{
    private $arr = [];

    public function __get($key)
    {
        if (array_key_exists($key, $this->arr)) {
            return $this->arr[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value)
    {
        $this->arr[$key] = $value;
    }

    public function jsonSerialize()
    {
        return ['info'=>$this->arr];
    }
}

$object = new Accessor;
$object->__set('Blow', 'Job');
$object->__get('Blow');
print_r($object->jsonSerialize());