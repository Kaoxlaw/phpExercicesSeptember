<?php
require_once './models/drivers.php';

class DriversControllers
{
  public function addDrivers()
  {
    require_once './views/drivers/drivers.php';

    $drivers = new Drivers();
    if (isset($_POST['submit'])) {
      $firstName = $drivers->setFirstName($_POST['firstName']);
      $lastName = $drivers->setLastName($_POST['lastName']);

      $drivers->create($firstName, $lastName);
    }
  }

  public function displayDrivers()
  {
    $drivers = new Drivers();

    $list = $drivers->display('drivers');

    require_once './views/drivers/drivers.php';
  }

  public function show($id)
  {
    $drivers = new Drivers();
    $driversById = $drivers->findById($id, 'drivers');

    require_once './views/drivers/updateDrivers.php';

    if (isset($_POST['modify'])) {
      foreach ($driversById as $value) {
        $firstName = $value->setFirstName($_POST['firstName']);
        $lastName = $value->setLastName($_POST['lastName']);

        $value->update($id, $firstName, $lastName);
      }
    }
  }

  public function delete($id)
  {
    $drivers = new Drivers();
    return $drivers->deleteById($id, 'drivers');
  }
}