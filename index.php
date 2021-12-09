<?php 

require_once __DIR__ . "/UtenteBannato.php";

    $Utente = new UtenteBannato("ciccio@gmail.com", "ciccio", 0);
    var_dump($Utente);
    
    $Utente->setDuration("160gg");
    var_dump($Utente)




?>