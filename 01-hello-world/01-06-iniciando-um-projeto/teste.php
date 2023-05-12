<?php

class Product
{
    private string $name;
    private array $products;

    public function add(string $name)
    {
        $this->name = $name;
        $this->products = [];
    }
}
