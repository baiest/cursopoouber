<?php
require_once('car.php');
class UberVan extends Car{
    public $typeCarAcepted;
    public $seatMaterial;

    public function __contruct($license, $driver,
    $typeCarAcepted, $seatMaterial){
        parent::__contruct($license, $driver);
        $this->typeCarAcepted = $typeCarAcepted;
        $this->seatMaterial = $seatMaterial;
    }
}