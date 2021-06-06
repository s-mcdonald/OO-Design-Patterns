<?php

use Thrive\SingletonPattern\MySingleton;


require __DIR__.'/../Thrive/autoload.php';



$object = MySingleton::ThereCanOnlyBeOne();
$object2 = MySingleton::ThereCanOnlyBeOne();
$object3 = MySingleton::ThereCanOnlyBeOne();



//echo $object;
echo '<pre>';

var_dump($object);
var_dump($object2);
var_dump($object3);

