<?php 

require_once __DIR__ . "./Address.php";
require_once __DIR__ . "./Utente.php";
require_once __DIR__ . "./Sconti.php";
require_once __DIR__ . "./Utente_Premium.php";

class Carrello extends Prodotti {
    public $lista_articoli;

    public function __construct($lista_articoli_)
    {
        $this->setLista($lista_articoli_);
    }

    public function setLista($value) {
        $this->lista_articoli = $value;
    }
}


?>