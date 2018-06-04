<?php

namespace Basket;

class Basket
{
    protected $object;

    public function __construct($object)
    {
        $this->object = $object;
    }

}