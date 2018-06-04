<?php

namespace Product;

interface MainProduct
{
    public function getPrice();

    public function setPrice($price);

    public function getTitle();

    public function setTitle($title);

    public function getDelivery();

    public function setDelivery($delivery);

}