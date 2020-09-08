<?php
require_once 'views/header.html';
require_once 'controllers/vehiclesControllers.php';

$vehicles = new VehiclesControllers();

$vehicles->displayVehicles();
$vehicles->addVehicles();