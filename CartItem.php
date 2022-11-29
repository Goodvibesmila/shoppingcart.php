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

    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    // CHECK TODO Skriv en konstruktor som sätter alla properties

    // CHECK TODO Skriv getters för alla properties


    //CHECK VG: Skall utöka antalet på ett cartItem med 1. 
    //CHECK VG: Det skall inte vara möjligt att utöka så att antalet överstiger produktens $inStock.
    public function increaseQuantity()
    {
    if( $this->quantity < $this->product->getinStock()){
        $this->quantity +=1;
    }   else {
        echo "Kan inte lägga till. Slut i lager";
    }
}
}