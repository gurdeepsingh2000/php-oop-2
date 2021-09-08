<?php 


class Product {

    

    protected $label = 'Prodotto In Evidenza';
    protected $price;
    protected $TypeofProduct = 'All';
    protected $ShippingPrice;


    public function getLabel(){
        return $this->label;
    }

    public function getPice(){
        return $this->price;
    }

    public function getTypeofProduct(){
        return $this->TypeofProduct;
    }

    public function ShippingPrice(){
        return $this->ShippingPrice;
    }
}

class Laptop extends Product {

    public $typeofLaptop = 'Gaming';
    public $weight = '4kg';
    public $series = 'GX551QS-HF057T';

    public function __construct(){
        $this->label = 'ASUS ZEPHYRUS';
        $this->price = 3999.90;
        $this->TypeofProduct = 'Technology';
        $this->ShippingPrice = 9.99;
    }
}

class Phone extends Product {

    public $typeofPhone = 'SmartPhone';
    public $weight = '80g';
    public $series = 'Z-Fold';

    public function __construct(){
        $this->label = 'Samsung Galaxy';
        $this->price = 1949.90;
        $this->TypeofProduct = 'Technology';
        $this->ShippingPrice = 9.99;
    }
}

class Protein extends Product {

    public $flavour = 'Chocolate';
    public $typeOfProtein = 'Powder';
    public $weight = '5kg';
    
    public function __construct(){
        $this->label = 'Impact Whey Protein';
        $this->price = 7.99;
        $this->TypeofProduct = 'Sport';
        $this->ShippingPrice = 2.99;
    }
}


class Bike extends Product {

    public $weight = '5kg';
    public $typeofbike = 'Electric';
    

    public function __construct(){
        $this->label = 'RIVERSIDE';
        $this->price = 219.99;
        $this->TypeofProduct = 'Sport';
        $this->ShippingPrice = 10.99;
    }
}
?>