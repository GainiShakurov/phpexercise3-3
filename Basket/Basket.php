<?php

namespace Basket;

class Basket
{
    protected $object = [];

    public function addProduct($object)
    {
        $this->object[] = $object;
        return $this;
    }

    public function deleteProduct($object)
    {
        $key = array_search($object, $this->object);
        unset($this->object[$key]);
        return $this;
    }

    public function getOrderPrice()
    {
        $sum = 0;
        foreach ($this->object as $obj) {
            $sum += $obj->getPrice();
        }
        return $sum;
    }

    public function getOrder()
    {
        return $this->object;
    }

}