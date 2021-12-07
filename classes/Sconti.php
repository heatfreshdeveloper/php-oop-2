<?php 

require_once __DIR__ . "./Utente.php";
require_once __DIR__ . "./Utente_Premium.php";
require_once __DIR__ . "./Carrello.php";

class Sconti extends Carrello {
    public $sconto_eta;
    public $sconto_newsletter;

    public function __construct($eta, $newsletter)
    {
        $this->sconto_eta = $eta;
        $this->sconto_newsletter = $newsletter;
    }

    public function setEta($value) {
        $this->sconto_eta = $value;
    }

    public function getEta($value) {
        return $this->sconto_eta;
    }
}


?>