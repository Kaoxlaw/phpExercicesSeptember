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

    $list = $vehicles->display('vehicles');

    require_once './views/vehicles/vehicles.php';
  }

  public function show($id)
  {
    $vehicles = new Vehicles();
    $vehiclesById = $vehicles->findById($id, 'vehicles');

    require_once './views/vehicles/updateVehicles.php';

    if (isset($_POST['modify'])) {
      foreach ($vehiclesById as $value) {
        $brand = $value->setBrand($_POST['brand']);
        $models = $value->setModels($_POST['models']);
        $color = $value->setColor($_POST['color']);
        $registration = $value->setRegistration($_POST['registration']);

        $value->update($id, $brand, $models, $color, $registration);
      }
    }
  }

  public function delete($id)
  {
    $vehicles = new Vehicles();
    return $vehicles->deleteById($id, 'vehicles');
  }
}
