<?php


class CartItem
{

    public function __construct($product, $quantity)
    
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    private $product;
    private int $quantity;

    public function getProductQuantity()
    {
        return $this->id . " " . $this->title . " " . $this->price . " " . $this->inStock;
    }

    // CHECK TODO Skriv en konstruktor som sätter alla properties

    // TODO Skriv getters för alla properties


    //VG: Skall utöka antalet på ett cartItem med 1. 
    //VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
    }
}
