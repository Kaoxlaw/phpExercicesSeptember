<?php
require_once 'views/header.html';
require_once 'controllers/driversControllers.php';
require_once 'controllers/vehiclesControllers.php';


$drivers = new DriversControllers();
$vehicles = new VehiclesControllers();


if (isset($_GET['action'])) {
  if ($_GET['action'] == 'updateDrivers') {
    $drivers->show($_GET['id_drivers']);
  } else if ($_GET['action'] == 'deleteDrivers') {
    $drivers->delete($_GET['id_drivers']);
  } elseif ($_GET['action'] == 'addVehicles') {
    $vehicles->displayVehicles();
    $vehicles->addVehicles();
  } else if ($_GET['action'] == 'updateVehicles') {
    $vehicles->show($_GET['id_vehicles']);
  } else if ($_GET['action'] == 'deleteVehicles') {
    $vehicles->delete($_GET['id_vehicles']);
  }
} else {
  $drivers->displayDrivers();
  $drivers->addDrivers();
}
