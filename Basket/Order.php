<?php

namespace Basket;

class Order extends Basket
{

    public function setObject($object)
    {
        $this->object = $object;
    }

    public function sendToPrint()
    {
        $string = '';
        foreach ($this->object as $key => $obj) {
            $string .= '<h1>Заказ №' . $key . '</h1>';
            $string .= '<h2>' . $obj->getTitle() . '</h2>';
            $string .= '<h4>' . $obj->getPrice() . '</h4>';
            $string .= '<h4>' . $obj->getDelivery() . '</h4>';
        }

        return $string;
    }

}