<?php 

require_once __DIR__ . "./Utente.php";

class UtentePremium extends Utente{
    public $discount;
    public $fastShipment;
  

    public function __construct($_discount,$_fastShipment)
    {
       $this->discount = $_discount;
       $this->fastShipment = $_fastShipment;
    }

}


$utentePremium = new UtentePremium("40%","2");
?>
