<?php

namespace Product;

class SmartPhone extends Product
{
    protected $manufacturer;
    use ChangePrice;

    public function __construct($title, $price, $manufacturer)
    {
        $this->title = $title;
        $this->setPrice($price);
        $this->manufacturer = $manufacturer;
        $this->setDelivery(300);
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

}