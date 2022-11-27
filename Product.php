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

    public function getProduct()
    {
        return $this->id . " " . $this->title . " " . $this->price . " " . $this->inStock;
    }

    // CHECK TODO Skriv en konstruktor som sätter alla properties

    // CHECK TODO Skriv getters för alla properties

}

// Överflödig? $product1 = new order();
// Behöver vi skriva följande kod: echo $product1->getProduct(); 
