<?php
require_once 'views/header.html';
require_once 'controllers/driversControllers.php';

$drivers = new DriversControllers();

$drivers->displayDrivers();
$drivers->addDrivers();