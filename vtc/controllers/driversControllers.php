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

    $list = $drivers->display();

    require_once './views/drivers/drivers.php';
  }

  // public function updateDrivers()
  // {
  //   require_once './views/updateDrivers.php';

  //   $drivers = new Drivers();
  //   if (isset($_POST['modify'])) {
  //     $firstName = $drivers->setFirstName($_POST['firstName']);
  //     $lastName = $drivers->setLastName($_POST['lastName']);

  //     $drivers->modify($firstName, $lastName);
  //   }
  // }

  // public function deleteDrivers()
  // {
  //   $drivers = new Drivers();

  //   $id = $drivers->getId($_GET['id']);
  //   $drivers->delete($id);

  //   require_once './views/drivers.php';
  // }
}