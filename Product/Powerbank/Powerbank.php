<?php

namespace Product;

class PowerBank extends Product
{
    protected $power;
    use ChangePrice;

    public function __construct($title, $price, $power)
    {
        $this->title = $title;
        $this->setPrice($price);
        $this->power = $power;
        $this->setDelivery(300);
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

}