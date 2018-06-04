<?php

namespace Product;

class Monitor extends Product
{
    protected $weight;

    public function __construct($title, $price, $weight)
    {
        $this->title = $title;
        $this->weight = $weight;
        $this->setPrice($price);
        $this->setDelivery(250);
        if ($this->getWeight() > 10) {
            $this->setPrice($price * 0.9);
            $this->setDelivery(300);
        }
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

}