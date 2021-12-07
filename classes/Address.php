<?php 

require_once __DIR__ . "./Utente.php";


class Address extends Utente{
    protected $street;
    protected $city;
    protected $province;
    protected $country;

    public function __construct($_country, $_city) {
    
        $this->country = $_country;
        $this->city = $_city;
      }
    
      public function setStreet($_value) {
        $this->street = $_value;
      }
      public function setCity($_value) {
        $this->city = $_value;
      }
      public function setProvince($_value) {
        $this->province = $_value;
      }
      public function setCountry($_value) {
        $this->country = $_value;
      }
      public function setPostalCode($_value) {
        $this->postalCode = $_value;
      }
    
}


?>