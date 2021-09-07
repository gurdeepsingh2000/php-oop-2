<?php

require_once('Products.php');
require_once('Users.php');

class Eshop{
    public $name;

    public $typeShop;

    public $typeCommerce;

    private $products = [];

    private $users = [];

    
    public function __construct(string $nomeNegozio, string $TipoDiNegozio , string $TipoDiCommercio ){
        $this->name = $nomeNegozio;
        $this->typeShop = $TipoDiNegozio;
        $this->typeCommerce = $TipoDiCommercio;
    }

    public function addProduct(Product $nameofProduct){
        $this->products[] = $nameofProduct;
    }

    public function getProducts(){
        return $this->products;
    }


}

$eshop = new Eshop('Amazon','Ecommerce','B2P');

$laptops = new Laptop();
$laptops2 = new Laptop('Razor','Techno',9000,2.90);

$phones = new Phone();

$proteins = new Protein();

$bikes = new Bike();

$eshop->addProduct($laptops);
$eshop->addProduct($phones);
$eshop->addProduct($proteins);
$eshop->addProduct($bikes);
$eshop->addProduct($laptops2);




print_r($eshop-> getProducts());



?>



<!-- 1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto -->