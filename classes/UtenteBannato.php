<?php
require_once __DIR__ . "./Utente.php";
require_once __DIR__ . "./traits/Bannato.php";

class UtenteBannato extends Utente{
    use Bannato;


    public function __construct($_email, $_name, $_discount)
        {
            parent::__construct($_email, $_name, $_discount);
        }

}

?>
