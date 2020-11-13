<?php

namespace Source\Related;

class Product
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return number_format($this->price, 2, ',', '.');
    }

    /**
     * Set the value of price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}
