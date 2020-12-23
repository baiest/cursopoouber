<?php

class Uberx extends Car{
    public $brand;
    public $model;
    
    public function __construct($license, $driver){
        parent::__construct($license, $driver);
        $this->license = $license;
        $this->model = $model;
    }
}