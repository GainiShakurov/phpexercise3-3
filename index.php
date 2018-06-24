<?php

namespace Product;

use Basket\Basket;
use Basket\Order;

function myAutoload($classNameWithNamespace)
{
    foreach ($classNameWithNamespace as $currectClass) {
        $pathToFile = $_SERVER['DOCUMENT_ROOT'] //ищем файлы начиная
            . str_replace('\\', DIRECTORY_SEPARATOR, $currectClass)
            . '.php'; //добавляем расширение

        if (file_exists($pathToFile)) {

            include "$pathToFile";
        }
    }
}

$namespacesArray = ['/Product/Product', '/Product/ChangePrice/ChangePrice', '/Product/SmartPhone/SmartPhone', '/Product/Powerbank/Powerbank', '/Product/Monitor/Monitor', '/Basket/Basket', '/Basket/Order', '/Product/Interfaces/MainProduct'];

myAutoload($namespacesArray);

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

$basket = new Basket();
$basket->addProduct($smart1)->addProduct($power1);
echo 'Сумма заказа - ' . $basket->getOrderPrice();

$basket->deleteProduct($smart1);
echo "<pre>";
print_r($basket);
echo "</pre>";

$order = new Order();
$order->setObject($basket->getOrder());
echo $order->sendToPrint();
