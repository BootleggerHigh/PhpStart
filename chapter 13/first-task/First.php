<?php


class First
{
    public function find($str)
    {
        $ctx = stream_context_create(
            array(
                'http'=> array(
                "method"=>"GET",
                "header"=> "Content-Type: text/xml\r\n",
                )
            )
        );
        $request = 'https://www.php.net/manual/ru/function.'.$str.'.php';
        return file_get_contents($request,0,$ctx);
    }
}


$obj = new First();
$result = $obj->find('is-int');

echo $result;