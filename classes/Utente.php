<?php 

class Utente {
    public $email;
    public $name;
    protected $payment;



    public function __construct($_email, $_name, $_payment)
    {
        $this->setEmail($_email);
        $this->setName($_name);
        $this->setPayment($_payment);
    }

    public function setPayment($_value){
        $this->payment = $_value;
    }
    public function getPayment(){
        return $this->payment;
    }

    public function setName($_value){
        $this->name = $_value;
    }
    public function setEmail($_value){
        $this->email = $_value;
    }

    
}


$istanzaUtente = new Utente("alex@gmail.com", "Alex", "Paypal");
?>