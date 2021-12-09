<?php 

trait Bannato {

    public $duration;

    public function setDuration($value){
        $this->duration = $value;
    }

    public function getDuration(){
        return $this->duration;
    }

}


?>