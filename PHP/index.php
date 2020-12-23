<?php
require('account.php');
require('car.php');

$car = new Car("FAS455", new Account("Andres Herrera", "12342"));

$car->printDataDriver();