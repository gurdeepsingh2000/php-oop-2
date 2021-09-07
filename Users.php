<?php 


class Users {

    private $Name;
    private $Surname;
    private $Address;
    private $PhoneNumber = false; 
    private $MailAddress;
    private $Membership = 'free';
    private $CreditCrad;
    private $CCexpired;
    private $Discount;

    public function __construct(string $name, string $surname, string $address, string $mailaddress, string $membership, int $creditcard, int $CCYearExp) {
        $this->Name = $name;
        $this->Surname = $surname;
        $this->address = $address;
        $this->Mailaddress = $mailaddress;
        $this->Membership = $membership;
        $this->CreditCrad = $creditcard;
        $this->CCexpired = $CCYearExp;
        $this->Discount = 0;

         if($this->Membership !== 'free'){
            $this->Discount = 50;
        }
    }

    public function getName(){
        return $this->Name;
    }

    public function getSurname(){
        return $this->Surname;
    }

    public function getAddress(){
        return $this->Address;
    }

    public function getMailaddress(){
        return $this->Mailaddress;
    }

    public function getMembership(){
        return $this->Membership;
    }
}


class client1 extends Users{
    public function __construct()
    {
        $this->Name = 'Valerio';
        $this->Surname = 'Marini';
        $this->address = 'Via di giovanni 13';
        $this->Mailaddress = 'valeriomarini@gmail.com';
        $this->Membership = 'premium';
        $this->CreditCrad = 3948930494834;
        $this->CCexpired = 2025;
    }
} 

?>