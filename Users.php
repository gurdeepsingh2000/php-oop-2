<?php 


class Users {

    private $Name;
    private $Surname;
    private $Address;
    private $PhoneNumber = false; 
    private $MailAddress;
    private $Membership = 'Free';
    private $CreditCrad;
    private $CCexpired;

    public function __construct(string $name, string $surname, string $address, string $mailaddress, string $membership, int $creditcard, int $CCYearExp) {
        $this->Name = $name;
        $this->Surname = $surname;
        $this->address = $address;
        $this->Mailaddress = $mailaddress;
        $this->Membership = $membership;
        $this->CreditCrad = $creditcard;
        $this->CCexpired = $CCYearExp;
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

    public function getExpirationDate(){
        if($this->CCexpired < 2021){
            echo "This card has been expired";
        }else{
            echo "ok";
        }
    }

}

?>