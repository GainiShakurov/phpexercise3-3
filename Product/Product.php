<?php

namespace Product;

abstract class Product
{

    protected $price;
    protected $title;
    protected $delivery;

    public function getPrice()
    {
        return $this->price;
    }

    abstract public function setPrice($price);

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDelivery()
    {
        return $this->delivery;
    }

    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

}