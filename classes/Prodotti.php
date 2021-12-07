<?php 

require_once __DIR__ . "./Utente.php";

class Prodotti extends Utente {
    public $marca;
    public $modello;
    public $categoria;
    public $prezzo;

    public function __construct($_marca, $_modello, $_categoria, $_prezzo)
    {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->categoria = $_categoria;
        $this->prezzo = $_prezzo;
    }

    
}

?>