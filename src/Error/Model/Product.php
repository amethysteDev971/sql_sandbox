<?php
namespace App\Error\Model;

class Product {
    //    - Propriétés : `name` (nom du produit), `price` (prix du produit), `stock` (quantité en stock).

    /**
     * Nom du produit
     *
     * @var string
     */
    private string $name;

    /**
     * prix du produit
     *
     * @var string
     */
    private string $price;

    /**
     * quantité en stock
     *
     * @var int
     */
    private int $stock;

    public function __construct($name,$price,$stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }


    /**
     * Get quantité en stock
     *
     * @return  int
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set quantité en stock
     *
     * @param  int  $stock  quantité en stock
     *
     * @return  self
     */ 
    public function setStock(int $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get prix du produit
     *
     * @return  string
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set prix du produit
     *
     * @param  string  $price  prix du produit
     *
     * @return  self
     */ 
    public function setPrice(string $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get nom du produit
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nom du produit
     *
     * @param  string  $name  Nom du produit
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    //      - `isAvailable()`: vérifie si le produit est en stock (quantité > 0).
//      - `purchase()`: décrémente la quantité en stock si le produit est disponible ; sinon, lance une `OutOfStockException`.


    /**
     * vérifie si le produit est en stock (quantité > 0)
     *
     * @return boolean
     */
    public function isAvailable() : bool {
        return $this->stock > 0 ? true : false;
    }

    public function purchase() {
        //TODO Faire un try & catch - lance une `OutOfStockException` 
        if ($this->isAvailable()) {
            $this->stock--;
        }

    }
}