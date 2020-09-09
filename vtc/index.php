<?php
require_once 'views/header.html';
require_once 'controllers/driversControllers.php';

$drivers = new DriversControllers();

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'updateDrivers') {
    $drivers->show($_GET['id_drivers']);
  } else if ($_GET['action'] == 'deleteDrivers') {
    $drivers->delete($_GET['id_drivers']);
  }
} else {
  $drivers->displayDrivers();
  $drivers->addDrivers();
}