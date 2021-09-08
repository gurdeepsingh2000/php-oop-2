<?php 


class Users {

    private $Name;
    private $Surname;
    private $Address;
    private $PhoneNumber = false; 
    private $MailAddress;
    private $Membership = 'free';
    private $CreditCrad;
    private $CCexpiration;
    private $Discount;
    public $Date;


    public function __construct(string $name, string $surname, string $address, int $PhoneNumber, string $mail, string $membership, int $creditcard, int $CCYearExp) {
        $this->Name = $name;
        $this->Surname = $surname;
        $this->Address = $address;
        $this->MailAddress = $mail;
        $this->Membership = $membership;
        $this->CreditCrad = $creditcard;
        $this->PhoneNumber = '+39' . $PhoneNumber;
        $this->CCexpiration = $CCYearExp;
        $this->Discount = 0;
        $this->Date = date('Y', time());

         if($this->Membership === 'Premium'){
            $this->Discount = 50;
        }

        if($this->Date > $CCYearExp){
            $this->CCexpiration = 'This card has been expired';
        }
    }

    // public function getName(){
    //     return $this->Name;
    // }

    // public function getSurname(){
    //     return $this->Surname;
    // }

    // public function getAddress(){
    //     return $this->Address;
    // }

    // public function getMailaddress(){
    //     return $this->Mailaddress;
    // }

    // public function getMembership(){
    //     return $this->Membership;
    // }
}
?>