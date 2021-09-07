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

    public function addUsers(Users $users){
        $this->users[]=$users;
    }

    public function getProducts(){
        return $this->products;
    }

    public function getUsers(){
        return $this->users;
    }


}

$eshop = new Eshop('Amazon','Ecommerce','B2P');

$laptops = new Laptop();

$phones = new Phone();

$proteins = new Protein();

$bikes = new Bike();

$eshop->addProduct($laptops);
$eshop->addProduct($phones);
$eshop->addProduct($proteins);
$eshop->addProduct($bikes);




print_r($eshop-> getProducts()) ;

'<br>';

$user =  new Users('Mario', 'ronaldo', 'Via delle Carrozze','Ciaomario@mario.com', 'Premium', 3920489348903, 2022);

$eshop->addUsers($user);

print_r($eshop->  getUsers()) ;







?>



<!-- 1. creiamo l'eshop
2. creiamo diversi prodotti
3. aggiungiamoli all'eshop
4. creaiamo l'utente normale
5. creiamo un utente premium
6. inseriamo le carte di credito per ciascun utente
6. l'utente normale acquista un prodotto
7. l'utente premium acquista un altro prodotto (e riceve lo sconto -->