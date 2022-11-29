<?php

class Product
{

    public function __construct($id, $title, $price, $inStock)
    
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->inStock = $inStock; 
    }

    private $id;
    private $title;
    private $price;
    private $inStock;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getinStock()
    {
        return $this->inStock;
    }

    // CHECK TODO Skriv en konstruktor som sätter alla properties

    // CHECK TODO Skriv getters för alla properties

}

