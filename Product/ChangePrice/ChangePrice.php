<?php

namespace Product;

trait ChangePrice
{
    public function setPrice($price)
    {
        $this->price = $price * 0.9;
    }
}