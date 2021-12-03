<?php 

require_once __DIR__ . "./utente.php";

class UtentePremium extends Utente{
    public $discount;
    public $fastShipment;
  

    public function __construct($_discount,$_fastShipment)
    {
       $this->discount = $_discount;
       $this->fastShipment = $_fastShipment;
    }


   
}


$pippo = new UtentePremium("40%","2");
?>
