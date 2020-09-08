<?php
require_once './models/vehicles.php';

class VehiclesControllers
{
  public function addVehicles()
  {
    require_once './views/vehicles/vehicles.php';

    $vehicles = new Vehicles();
    if (isset($_POST['submit'])) {
      $brand = $vehicles->setBrand($_POST['brand']);
      $models = $vehicles->setModels($_POST['models']);
      $color = $vehicles->setColor($_POST['color']);
      $registration = $vehicles->setRegistration($_POST['registration']);

      $vehicles->create($brand, $models, $color,  $registration);
    }
  }

  public function displayVehicles()
  {
    $vehicles = new Vehicles();

    $list = $vehicles->display();

    require_once './views/vehicles/vehicles.php';
  }
}