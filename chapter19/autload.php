<?php
spl_autoload_register();
$obj = new \SelfPhp\Article();
$obj->setAuthor('Димон');
$obj->seo('SEO');
$obj->title();
print_r($obj);
echo 'AUU';