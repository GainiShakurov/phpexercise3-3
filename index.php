<?php

namespace Product;

function myAutoload($classNameWithNamespace)
{
    $pathToFile = $_SERVER['DOCUMENT_ROOT'] //ищем файлы начиная
        . str_replace('\\', DIRECTORY_SEPARATOR, $classNameWithNamespace)
        . '.php'; //добавляем расширение

    if (file_exists($pathToFile)) {

        include "$pathToFile";
    }
//
}

myAutoload('/Product/Product');
myAutoload('/Product/ChangePrice/ChangePrice');
myAutoload('/Product/SmartPhone/SmartPhone');
myAutoload('/Product/Powerbank/Powerbank');
myAutoload('/Product/Monitor/Monitor');

$smart1 = new SmartPhone('m3 note', 500, 'meizu');
$smart1->setPrice(20);
echo "<pre>";
print_r($smart1);
echo "</pre>";

$power1 = new PowerBank('xiaomi', 15, 10000);
echo "<pre>";
print_r($power1);
echo "</pre>";

$monitor1 = new Monitor('samsung', 200, 1);
echo "<pre>";
print_r($monitor1);
echo "</pre>";