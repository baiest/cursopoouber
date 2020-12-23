<?php

require_once('car.php');
class UberBlack extends Car{
    public $typeCarAcepted;
    public $seatMaterial;

    public function __construct($license, $driver,
    $typeCarAcepted, $seatMaterial){
        parent::__construct($license, $driver);
        $this->typeCarAcepted = $typeCarAcept;
        $this->seatMaterial = $seatMaterial;
    }
}