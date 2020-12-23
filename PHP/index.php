<?php
require_once('account.php');
require_once('car.php');
require_once('uberX.php');
require_once('UberPool.php');

#$car = new Car("FAS455", new Account("Andres Herrera", "12342"));
$uberX = new uberX("OPAKW", new Account("Andres Herrera", "4545"), "Chreverolet", "Spark");
$uberX->printDataDriver();

$uberPool = new UberPool("WQEQ474", new Account("Camila Vanegas", "4545"), "Dogd", "Attitude");
$uberPool->printDataDriver();